document.addEventListener('DOMContentLoaded', () => {
    let currentPage = 1;
    const searchInput = document.getElementById("searchInput");
    const resultCount = document.getElementById("resultCount");
    const pagination = document.querySelector(".pagination");
    searchInput.addEventListener("input", () => {
        currentPage = 1; // Reset the current page when a new search is performed
        filterTable();
      });
  
    // Create scroll-to-top button
    const scrollToTopButton = document.createElement('button');
    scrollToTopButton.innerHTML = '&#8593;';
    scrollToTopButton.id = 'scrollToTopButton';
    scrollToTopButton.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
    document.body.appendChild(scrollToTopButton);
  
    // Add the styling for the scroll-to-top button
    const style = document.createElement('style');
    style.innerHTML = `
      #scrollToTopButton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }
  
      #scrollToTopButton:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
    `;
    document.head.appendChild(style);
  
    async function filterTable() {
      const searchText = searchInput.value.toLowerCase();
      const response = await fetch(
        `static/PHP/fetch_structure.php?page=${currentPage}&search=${searchText}`
      );
      const data = await response.json();
      const rows = data.rows;
      const totalRecords = data.total;
      const totalPages = Math.ceil(totalRecords / 350);
      const startingRowNumber = (currentPage - 1) * 350 + 1;
  
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
            <td><a href="view_structure.php?pdb_id=${row.PDB_ID}" style="color: grey;">${row.PDB_ID}</a></td>
            <td>${row.Macromolecule_Name}</td>
            <td><em>${row.Source_Organism}</em></td>
            <td>${row.Experimental_Method}</td>
            <td>${row.Asym_ID}</td>
            <td>${row.Sequence}</td>
            <td>${row.Resolution}</td>
            <td>${row.PubMed_ID}</td>
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
      const header = ["S.No", "Title", "Sequence Length", "Accession ID", "GI", "FASTA"];
      const csvRows = [header];
      for (let rowIndex = 0; rowIndex < rows.length; rowIndex++) {
        const row = rows[rowIndex];
        const csvRow = [
          rowIndex + 1,
          row.PDB_ID,
          row.Macromolecule_Name,
          row.Source_Organism,
          row.Experimental_Method,
          row.Asym_ID,
          row.Sequence,
          row.Resolution,
          row.PubMed_ID,
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
  
    // Show or hide the scroll-to-top button based on scroll position
    window.addEventListener('scroll', () => {
        if (document.documentElement.scrollTop > 20) {
          scrollToTopButton.style.display = 'block';
        } else {
          scrollToTopButton.style.display = 'none';
        }
      });
    // Initialize the table
    filterTable();
  });
  
  