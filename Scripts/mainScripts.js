// Runtime Scripts
window.onscroll = function() {HeaderScroll()}; // When the window is scrolled, runs the HeaderScroll script


/* ------ ------ ------ Script Definitions ------ ------ ------ */
function HeaderScroll() {
  // Changes the styling on the webpage header when the user scrolls the mouse down from the top of the page
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    // When the webpage is scrolled 50px or more
    document.getElementById("header").style.cssText = "height: 6.25vh; max-height: 7vh; padding: 1vh 3%; box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28); ";
  } else {
    // When the webpage is not scrolled
    document.getElementById("header").style.cssText = "height: 9.5vh; max-height: 9.5vh;";
  }
} 