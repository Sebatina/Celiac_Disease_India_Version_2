<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celiac_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';

$limit = 10;
$offset = ($page - 1) * $limit;

if ($search != "") {
    $search = $conn->real_escape_string($search);
    $query = "SELECT * FROM protein_seq WHERE CONCAT(Title,Accession_ID,GI,FASTA) LIKE '%$search%' LIMIT $limit OFFSET $offset";
} else {
    $query = "SELECT * FROM protein_seq LIMIT $limit OFFSET $offset";
}

$result = $conn->query($query);

if (!$result) {
    echo json_encode(["error" => "Error: " . $conn->error]);
    exit();
}

$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

// Get the total number of records
if ($search != "") {
    $total_query = "SELECT COUNT(*) as total FROM protein_seq WHERE CONCAT(Title,Accession_ID,GI,FASTA) LIKE '%$search%'";
} else {
    $total_query = "SELECT COUNT(*) as total FROM protein_seq";
}
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];

// Return the result as an associative array
echo json_encode([
    "rows" => $rows,
    "total" => $total_records
]);

$conn->close();
?>
