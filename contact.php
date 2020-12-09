<!DOCTYPE html>
<html>
    <head>
        <!-- Webpage Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Lily's Lil' Garage, A good place to get some good food.">
        <meta name="keywords" content="Lily's Lil' Garage, Lily's Garage, Lily's Little Garage, Restaurant, Menu, Food">
        <meta name="author" content="Jerrod Dutcher, Cameron Jordan, James Moseley, Trent Toyryla, Alden Metzmaker">

        <!-- Webpage Title -->
        <title>Lily's Lil' Garage - Contact Info</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
		<link href="styleMobile.css" media="screen and (max-width: 1199px)" rel="stylesheet"/>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
        <!-- Scripts -->
        <script src="Scripts/mainScripts.js"></script>
		<script>
			function downAlert() {
				alert(`Alert: The email server is currently undergoing maintenance, your message will not be processed yet`)
			}
		</script>
    </head>
    <body>
        <section id="background"></section>

        <!-- Webpage Header -->
        <?php include('Includes/header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
			<!-- Parallax Top Image -->
				<div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageFlushing.jpg'); background-position: left 320%"></div>
				<div class="parallaxText2" style="left:750px">
                	<h2>Contact Us</h2>
				</div>
				<br>
				
			<!-- Contact Submission Form -->
			<!--1<form class="standardPad" action="contactResponse.php" method="post" id="contactForm" onsubmit="feedbackFormValidate()"> -->
			
			<!-- Links to the test email works locally, but not on server -->
			 <form id="contactForm" action="contactProcess.php" method="post">

				<!-- Personal Information -->
				<fieldset>
					<legend> Personal Information </legend>
					<table>
						<tr>
							<td>First Name: </td>
							<td colspan="3"><input type="text" name="firstName" size="40"
							title="Initail captial, then lowercase and no spaces"
							pattern="^[A-Z][a-z]*$" required></td>
						</tr>

						<tr>
							<td>Last Name: </td>
							<td colspan="3"><input type="text" name="lastName" size="40"
							title="Initail captial, then lowercase and no spaces"
							pattern="^[A-Z[a-z]*$" required></td>
						</tr>

					</table>
				</fieldset>

				<!-- Contact Information -->
				<fieldset>
					<legend> Contact Information </legend>
					<table>
						<tr>
							<td>E-mail Address: </td>
							<td colspan="3"><input type="text" name="email" size="40"
							title="Hint: llgrestaurant@gmail.com"
							pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" required></td>
						</tr>

						<tr>
							<td>Phone Number: </td>
							<td><input type="radio" name="phoneType">Home</td>
							<td><input type="radio" name="phoneType">Personal</td>
							<td><input type="radio" name="phoneType">Business</td>
						</tr>

						<tr>
							<td></td>
							<td colspan="3"><input type="text" name="phoneNumber" size="40"
							title="Hint: 012-345-6789"
							pattern="^(\d{3}-)?\d{3}-\d{4}$" required></td>
						</tr>

					</table>
				</fieldset>

				<!-- Contact Reason -->
				<fieldset>
					<legend>Contact Reason: </legend>
					<table>
						<tr>
							<td>Reason: 
								<select name="reason">
									<option> --- </option>
									<option> Complaint </option>
									<option> Feedback </option>
									<option> Inquiry </option>
									<option> Job Opportunity </option>
									<option> Large Party Inquiry </option>
									<option> Marketing Opportunites </option>
									<option> Other </option>
								</select>
							</td>
						</tr>

						<tr>
							<td>Store Location:
								<select name="location">
									<option> --- </option>
									<option> Ann Arbor, MI </option>
									<option> Climax, MI </option>
									<option> Colon, MI </option>
									<option> Flushing, MI </option>
									<option> Mount Pleasant, MI </option>
									<option> Pinckney, MI </option>
									<option> Setagaya-Ku, Tokyo </option>
								</select>
							</td>
						</tr>

						<!-- Message Input Box-->
						<tr>
							<td colspan="3">
								<label>Message:</label>
								<textarea name="message" rows="6" cols="38"></textarea>
							</td>
						</tr>

						<!-- Submit Button -->
						<tr>
							<td colspan="3"><input type="submit" name="sub" value="Submit" onclick="downAlert()"></td>
						</tr>
					</table>
				</fieldset>
			</form>
			<br>
        </main>

        <!-- Webpage Footer-->
        <?php include('Includes/footer.php'); ?>
	</body>
</html>
