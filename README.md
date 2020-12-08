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

# How to get the email send function to run on your local machine using XAMPP

First go to xampp > php > php.ini (if you cannot find the php.ini file look for the one that says configeration setting has a gear on file icon)

You'll have to find the ;sendmail_path = "" in the file and then swap it for the code below

  ;sendmail_path = "" ------> sendmail_path = "C:\xampp\sendmail\sendmail.exe -t" 
             if this doesn't work swap the "C:\xampp\sendmail\sendmail.exe" to the location you have xampp stored from root
             of where you have the php.ini file stored from root
             (make sure to remove the semicolon from the front)
             
 Save the php.ini file and then restart the apache
 Next go to the sendmail directory and then open the sendmail.ini
    you will see something similar to what you see below
   
   smtp_server=
   smtp_port=
   smtp_ssl=auto
   error_logfile=error.log
   auth_username=
   auth_password=
   
   swap the above code for the code below
    
   smtp_server=smtp.gmail.com
   smtp_port=465
   smtp_ssl=auto
   error_logfile=error.log
   auth_username=lilyslilgarage@gmail.com
   auth_password= DM ON DISCORD FOR PASSWORD AS THIS IS THE PASSWORD FOR THE EMAIL
   
   And then you should be all set to run the code on you local machine
   if this doesn't work let me(Theo) know as I probably missed a step
    
             
