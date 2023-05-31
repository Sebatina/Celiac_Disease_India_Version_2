<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view structure</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/CSS/structure.css">
    <link href="https://fonts.googleapis.com/css?family=Inter:regular|Roboto:light|Segoe+UI|Archivo+Black|Lustria&display=swap" rel="stylesheet">
    <script src="https://3Dmol.csb.pitt.edu/build/3Dmol-min.js"></script>
    <script src="https://unpkg.com/ngl@2.0.0-dev.37/dist/ngl.js"></script>
    <script src="static/JS/structure_viewer.js"></script>
</head>
<body>
  <div class="main-wrapper">
    <div class="content-container">
    <div class="about-container">
      <h1 class="about-text">PROTEIN</h1>
      <h2 class="one-stop-database">Structure</h2>
    </div>
  
    <div id="viewer" style="width:80%; height:100vh; margin-top: 200px; margin-right: 160px;"></div>


    <!-- Add your JS links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script>
    <script>
    const pdbId = "<?php echo isset($_GET['pdb_id']) ? $_GET['pdb_id'] : ''; ?>";
    initStructureViewer(pdbId);
    </script>

  </div>
    <div class="right-side-box">
      <a href="index.html"><div class="nav-item">Home</div></a>
      <a href="about.html"><div class="nav-item">About</div></a>
      <a href="celiac_disease.html"><div class="nav-item">Celiac Disease</div></a>
      <div class="nav-item" id="databaseMenu">Database</div>
    </div>
  
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  
    <div class="mobile-menu">
    <a href="index.html"><div class="nav-item">Home</div></a>
      <a href="about.html"><div class="nav-item">About</div></a>
      <a href="celiac_disease.html"><div class="nav-item">Celiac Disease</div></a>
      <div class="nav-item" id="databaseMenu">Database</div>
    </div>
    <div id="databaseModal" class="modal">
      <div class="modal-content" style="color: white;"> <!-- Add inline style here -->
        <span class="modal-close" style="color: white;">&times;</span> <!-- Add inline style here -->
        <a href="gene.html" class="modal-menu-link" style="color: white;">Gene</a><br>
        <a href="seq.html" class="modal-menu-link" style="color: white;">Protein Sequence</a><br>
        <a href="protein_str.html" class="modal-menu-link" style="color: white;">Protein Structure</a><br>
        <a href="peptide.html" class="modal-menu-link" style="color: white;">Celiac inducing Peptides</a><br>
        <a href="protein72.html" class="modal-menu-link" style="color: white;">Celiac inducing Proteins</a><br>
        <a href="omics.html" class="modal-menu-link" style="color: white;">-Omics</a><br>
        <a href="clinical_trials.html" class="modal-menu-link" style="color: white;">Clinical Trials</a><br>
        <a href="snp.html" class="modal-menu-link" style="color: white;">Single Nucleotide Polymorphism(SNP)</a>
      </div>
    </div>
    <script>
        document.querySelector(".hamburger").addEventListener("click", function () {
          document.querySelector(".mobile-menu").classList.toggle("show");
        });
        var modal = document.getElementById("databaseModal");
    var btn = document.getElementById("databaseMenu");
    var span = document.getElementsByClassName("modal-close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
</body>
</html>