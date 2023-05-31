let currentPage = 1;
const searchInput = document.getElementById("searchInput");
const resultCount = document.getElementById("resultCount");
const pagination = document.querySelector(".pagination");

searchInput.addEventListener("input", () => {
  currentPage = 1; // Reset the current page when a new search is performed
  filterTable();
});

async function filterTable() {
  const searchText = searchInput.value.toLowerCase();
  const response = await fetch(
    `static/PHP/fetch_peptide.php?page=${currentPage}&search=${searchText}`
  );
  const data = await response.json();
  const rows = data.rows;
  const totalRecords = data.total;
  const totalPages = Math.ceil(totalRecords / 100);
  const startingRowNumber = (currentPage - 1) * 100 + 1;

  if (rows.error) {
    console.log(rows.error);
  } else {
    const tableBody = document.getElementById("tableBody");
    tableBody.innerHTML = "";

    if (rows.length === 0) {
      updateResultCountText("No Record Found");
    } else {
      updateResultCountText(
        `${rows.length} matches found out of ${totalRecords}`
      );
      for (let rowIndex = 0; rowIndex < rows.length; rowIndex++) {
        const row = rows[rowIndex];
        const tr = document.createElement("tr");
        tr.innerHTML = `
          <td>${startingRowNumber + rowIndex}</td>
          <td>${row.Type}</td>
          <td><em>${row.Description}</em></td>
          <td>${row.Toxicity}</td>
          <td>${row.Form}</td>
          <td>${row.HLADQ}</td>
          <td>${row.SeqLen}</td>
          <td>${row.Sequence}</td>
         
        `;
        tableBody.appendChild(tr);
      }
    }
  }

  // Update pagination
  updatePagination(totalPages);
}

function updateResultCountText(text) {
  const resultCountElement = document.getElementById("resultCount");
  resultCountElement.innerText = text;
}

function updatePagination(totalPages) {
  pagination.innerHTML = "";

  if (totalPages <= 1) {
    pagination.style.display = "none"; // Hide pagination if there's only one page or less
  } else {
    pagination.style.display = ""; // Show pagination if there's more than one page
    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement("li");
      li.classList.add("page-item");

      if (i === currentPage) {
        li.classList.add("active");
      }

      li.innerHTML = `<a class="page-link" href="#" onclick="goToPage(${i})">${i}</a>`;
      pagination.appendChild(li);
    }
  }
}

function goToPage(pageNumber) {
  currentPage = pageNumber;
  filterTable();
}

document.getElementById("downloadResults").addEventListener("click", async () => {
  const data = await fetchData();
  const csv = convertToCSV(data.rows);
  downloadCSV(csv, "results.csv");
});

document.getElementById("downloadFullData").addEventListener("click", async () => {
  const data = await fetchData(true);
  const csv = convertToCSV(data.rows);
  downloadCSV(csv, "full_data.csv");
});

async function fetchData(allData = false) {
  const searchText = searchInput.value.toLowerCase();
  const searchParam = allData ? "" : `&search=${searchText}`;
  const response = await fetch(`static/PHP/fetch_seq.php?page=${currentPage}${searchParam}`);
  return await response.json();
}

function convertToCSV(rows) {
  const header = ["S.No", "Type", "Description", "Toxicity", "Form", "HLADQ", "SeqLen", "Sequence"];
  const csvRows = [header];
  for (let rowIndex = 0; rowIndex < rows.length; rowIndex++) {
    const row = rows[rowIndex];
    const csvRow = [
      rowIndex + 1,
      row.Type,
      row.Description,
      row.Toxicity,
      row.Form,
      row.HLADQ,
      row.SeqLen,
      row.Sequence,
    ];
    csvRows.push(csvRow);
  }

  return csvRows.map((row) => row.join(",")).join("\n");
}

function downloadCSV(csv, filename) {
  const blob = new Blob([csv], { type: "text/csv" });
  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.href = url;
  link.download = filename;
  link.click();
  URL.revokeObjectURL(url);
}

// Initialize the table
filterTable();
