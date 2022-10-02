let darkOn = true;


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function responsiveNav() {
    var x = document.querySelector("nav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


  function darkMode(dark)
  {
    let css = document.getElementById('css');

    if (dark && darkOn)
    {
      css.setAttribute("href","styles-dark/style.css");
      darkOn = false;
    }
    else {
      css.setAttribute("href","styles/style.css");
      darkOn = true;
    }
  }


