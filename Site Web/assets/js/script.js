$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

  });
  

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
  
      var dropdownsc = document.getElementsByClassName("dropdown-custom");
      var ic;
      for (ic = 0; ic < dropdownsc.length; ic++) {
        var openDropdownc = dropdownsc[ic];
        if (openDropdownc.classList.contains('show')) {
          openDropdownc.classList.remove('show');
        }
      }
    }
  }
