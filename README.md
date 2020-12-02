# Lily-Garage-Website (PHP/SQL Branch)
Website for Lily's Lil Garage.
This branch is for the PHP version of the website code, file types were changed to .PHP from .HTML, and the header and footer of the webpage are their own separate file that is included at runtime in order to make the code more easily modifiable.
This branch also includes SQL database functionality that is used in the online order page.

# How to run the website using PHP
The easiest way to run this website using PHP on your own local computer is to download and install XAMPP.
https://www.apachefriends.org/index.html
After installing, move the Lily-Garage-Website folder inside of the htdocs directory in xampp.
Next, make sure Apache is running from the XAMPP Control Panel.
You should now be able to see the website running at http://localhost/Lily-Garage-Website/index.php

# NOTE: You won't be able to display the pages properly without using apache or another PHP server.
PHP requires a webserver to process the webpage before displaying it in your browser, so you can't just open it like you can with an HTML document.

# How to set up the SQL database
-Make new database called "llg"

-import menu_items.sql into llg

-make sure $dbLocation is set to the proper database location in the file "Includes/databaseHandler.php"

-is configured for XAMPP by default

-set $dbUsername and $dbPassword to the password used on your db
