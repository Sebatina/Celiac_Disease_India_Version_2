$(document).ready(function() {
    $('.nav-item[data-toggle="collapse"]').on('click', function() {
      $('.right-side-box').toggleClass('right-side-box-slide');
    });
    $('#database-collapse').on('hidden.bs.collapse', function() {
      $('.right-side-box').removeClass('right-side-box-slide');
    });
  });
  