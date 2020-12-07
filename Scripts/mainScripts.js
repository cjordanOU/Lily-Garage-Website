/* ------ ------ Declarations ------ ------ */
var mediaQuery = window.matchMedia("screen and (max-width: 1199px)");
window.onscroll = function() {HeaderScroll()}; // When the window is scrolled, runs the HeaderScroll script

/* ------ ------ ------ Script Definitions ------ ------ ------ */

function HeaderScroll() {
  // Changes the styling on the webpage header when the user scrolls the mouse down from the top of the page
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    // When the webpage is scrolled 50px or more
    document.getElementById("header").style.cssText = "height: 68px; max-height: 68px; padding: 1vh 3%; box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);";
  } else {
    // When the webpage is not scrolled
    document.getElementById("header").style.cssText = "height: 96px; max-height: 96px;";
  }
}

// Changes Nav Icon on Mobile
function changeNavIcon(x) {
  x.classList.toggle("expand");
  var hiddenHeader = document.getElementById(header-nav);

  if (hiddenHeader.style.display === "block") {
    hiddenHeader.style.display = "none";
  } else {
    hiddenHeader.style.display = "block";
  }
}

// Menu Page Fade-in

