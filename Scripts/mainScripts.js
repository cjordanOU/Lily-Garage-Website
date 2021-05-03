/* ------ ------ Declarations ------ ------ */
var mediaQuery = window.matchMedia("screen and (max-width: 1199px)");
window.onscroll = function() {HeaderScroll()}; // When the window is scrolled, runs the HeaderScroll script
var prefix = "Images/rotateimages/";
var imageArray = new Array(6);
for (i=0; i<imageArray.length; i++){
  imageArray[i] = prefix + (i+1) + ".jpg";
}
var imageTextArray = ["ABS (Angus Beef Steak)", "Carbureted Coffee", "Caramel Drizzle Doughnut", "E85 Special", "Monster Truck Burger", "BMT (Big Mack Truck)"];
var imageCounter = 0;

function rotate() {
  var imageObject = document.getElementById('slideshowImage');
  var ImageText = document.getElementById('slideShowText');
  var imageContainer = imageObject.parentNode;
  //removes and adds animation class so it fires everytime the image changes
  imageContainer.classList.remove('fade');
  setTimeout(function(){
      imageContainer.classList.add('fade');
      imageObject.src = imageArray[imageCounter];
      ImageText.textContent=imageTextArray[imageCounter];
      ++imageCounter;
      if (imageCounter == 6) imageCounter = 0;
  }, 50);
}

function HeaderScroll() {
    // Changes the styling on the webpage header when the user scrolls the mouse down from the top of the page
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      // When the webpage is scrolled 50px or more
      document.getElementById("header").style.cssText = "height: 70px; max-height: 70px; padding: 1vh 3%; box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);";
    } else {
      // When the webpage is not scrolled
      document.getElementById("header").style.cssText = "height: 96px; max-height: 96px;";
    }
}

function startSlideshow() {
  document.getElementById('slideshowImage').src=imageArray[5];
  document.getElementById('slideShowText').textContent=imageTextArray[5];
  setInterval('rotate()', 3000);
}