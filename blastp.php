<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"  content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blast Page</title>
  <link rel="stylesheet" href="static/CSS/index.css">
  <link href="https://fonts.googleapis.com/css?family=Inter:regular|Roboto:light|Segoe+UI&display=swap" rel="stylesheet">
</head>
<body>
  <div class="title-container">
    <div class="one-stop">BLAST</div>
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
    <div class="celiac_disease.html">Celiac Disease</div>
    <div class="nav-item">Database</div>
  </div>

  <!-- Updated modal HTML -->
  <div id="databaseModal" class="modal">
    <div class="modal-content" style="color: white;"> <!-- Add inline style here -->
      <span class="modal-close" style="color: white;">&times;</span> <!-- Add inline style here -->
      <a href="gene.html" class="modal-menu-link" style="color: white;">Gene</a><br>
      <a href="seq.html" class="modal-menu-link" style="color: white;">Protein Sequence</a><br>
      <a href="protein_str.html" class="modal-menu-link" style="color: white;">Protein Structure</a><br>
      <a href="omics.html" class="modal-menu-link" style="color: white;">-Omics</a><br>
      <a href="clinical_trials.html" class="modal-menu-link" style="color: white;">Clinical Trials</a><br>
      <a href="snp.html" class="modal-menu-link" style="color: white;">Single Nucleotide Polymorphism(SNP)</a>
    </div>
  </div>
  


<table  width=100%  border=0
style="background: url('img/pattern.jpg') repeat;    font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;    color: #555;    -webkit-font-smoothing: antialiased !important"
			border=0  style="   color: #8a6d3b;       border-color: #faebcc;"> 
				<tr> <td >				
<pre><h3 style="font-size:22px;"><b><font color=blue style="font-family: 'Open Sans'	, sans-serif;
font-size: 18px;
line-height: 1.8;">BLAST Submission Form</font></h3></pre>

<form action="blastres.php" method="POST">
 
<table width=100% border=0 style="border-radius:20px;">
<tr><Td>Paste the Sequence </td> <Td valign=top width=90%><textarea  name=seq style="width:600px;" rows="10" cols="100"></textarea>
<br><b><font color=red>Note :</font><font color=blue>Paste only the sequence in PDB BLAST</font>
</td></tr>
<Td>eCutOff </td><Td><input type=text name=ecut></td></tr>
<tr><Td>Matrix </td><Td><input type=text list=matrix name=mat><datalist id=matrix><option value="BLOSUM62">
<option value="BLOSUM50"><option value="BLOSUM45"></datalist></td></tr>
<tr><Td>Choose The Database </td><td>

<input type=radio  name=db value="celiac Database">celiac Database

</td></tr>
<tr><Td colspan=2>  <button type="submit" class="button_medium" >Search</button>
                <button type="reset" class="button_medium" >Reset</button>
</tD></tr>
</table>


</tD>
</tr>
        
</table>


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