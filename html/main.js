function myFunction1(x) {
    x.classList.toggle("change");
  }

/* When the user clicks on the button, 
                    toggle between hiding and showing the dropdown content */

    function myFunction() {
        document.getElementById("myDropdown1").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn1')) {
            var dropdowns = document.getElementsByClassName("container-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
