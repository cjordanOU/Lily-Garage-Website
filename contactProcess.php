<?php
/*contactProcess.php
This handles all the work for the email process
*/

	$headers = "From: Lily's Lil Garage <lilyslilgarage@gmail.com> \r\n";
	
	$to = "E-mail address: $_POST[email]\r\n";
	$subject = "Subject: $_POST[reason] received\r\n";
	
	$message = "Dear $_POST[firstName] $_POST[lastName]:\n. 
				Thank you for reaching out to us! Here's the message you sent us:\n\n
				$_POST[message]\n\n
				We will be reaching back out to you shortly";
	
	if ( mail($to, $subject, $message, $headers) )
		echo 'Your contact information has been successfully uploaded!';
	else
		echo 'We aplogize, but your contact information could not be sent.';
		
		
/*Down here is all the templates I was going to create for 
different responses on for the email free to edit. Just a heads up
all the code below will run, I just did not revise it to work properly.
If you uncommment the stuff below comment the stuff above*/		
		
/*Construct message to be sent to the us
 $messageToBusiness = 
    "From: $_POST[salute] $_POST[firstName] $_POST[lastName]\r\n".
    "E-mail address: $_POST[email]\r\n".
    "Phone number: $_POST[phone]\r\n".
    "$_POST[message]\r\n";
	
//Send e-mail feedback message to the business
//(but here, to the text's website)
$headerToBusiness = "From: $_POST[email]\r\n";
mail("lilyslilgarage@gmail.com", $_POST['subject'],
    $messageToBusiness, $headerToBusiness);

//Construct e-mail confirmation message for the client,
//which is just a sligtly modified version of the message
$messageToClient =
    "Dear $_POST[salute] $_POST[lastName]:\r\n".
    $messageToBusiness.
    "Thank you for the feedback.\r\n".
	
//Sends e-mail confirmation message to the client
$headerToClient = "From: lilyslilgarage@gmail.com\r\n";
mail($_POST['email'], "Re: $_POST[subject]",
    $messageToClient, $headerToClient);

//Transforms confirmation message to HTML 5 format for
//display in the client's browser
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body><code>$display</code></body>
    </html>";
echo $display; */
?>


