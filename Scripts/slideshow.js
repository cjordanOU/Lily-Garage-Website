//rotate.js
//Handles the image rotation seen on the website's home page
//It's been a good while since I last did js, so I'll try my best to explain
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		//This is really important or it won't work. After you read the comment below
		//make sure that you change the images names to numbers such as 1,2,3, etc. in the
		//order you want them to appear in or the arrray won't work.


//This is where the slideshow pull the images from. In my file I have a folder named
// rotateimages/. So for the project make a new folder and insert the name where it says 
//rotate images.
var prefix = "Images/rotateimages/";

//Use that prefix to put the proper sequence of image filenames into an array.
//We also have to make sure the images we are using are .jpg. If we want to use
//more then 6 or less then 6 pictures in the slideshow, whereever you see 6
//change that to the preffered number.
var imageArray = new Array(6);
for (i=0; i<imageArray.length; i++){
    imageArray[i] = prefix + (i+1) + ".jpg";
}
var imageTextArray = ["ABS (Angus Beef Steak)", "Carbureted Coffee", "Caramel Drizzle Doughnut", "E85 Special", "Monster Truck Burger", "BMT (Big Mack Truck)"];


//This is the code for when the images roate. Oooo look, there's a 6.
var imageCounter = 0;
function rotate()
{
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

//Called as soon as home page has loaded, to start image rotation.
//This is what I explain on the html doc.
function startRotation()
{
	
	//If you decided to add or remove the 6 I mentioned earlier
	//change the 5 to the number below of what you used.
    document.getElementById('slideshowImage').src=imageArray[5];
    document.getElementById('slideShowText').textContent=imageTextArray[5];
	//This is the speed of the slideshow, feel free to adjust it as you want
    setInterval('rotate()', 3000);
}
