document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("databaseMenu").addEventListener("click", function () {
      const modal = document.getElementById("databaseModal");
      modal.style.display = "block";
    });
  
    document.getElementById("closeDatabaseModal").addEventListener("click", function () {
      const modal = document.getElementById("databaseModal");
      modal.style.display = "none";
    });
  });
