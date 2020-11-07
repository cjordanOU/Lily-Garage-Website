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
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <section id="background"></section>

        <!-- Webpage Header -->
        <?php include('header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
			<!-- Contact Submission Form -->
			<form action="contactResponse.php" method="post" id="contactForm" onsubmit="feedbackFormValidate()">
				<h1>Contact Information</h1>
				
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

						<tr>
							<td>Gender: </td>
							<td><input type="radio" name="gender">Male</td>
							<td><input type="radio" name="gender">Female</td>
							<td><input type="radio" name="gender">Other</td>
							<td><input type="radio" name="gender">Prefer not to say</td>
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

						<tr>
							<td colspan="2"> Preferred Contact Method: </td>
							<td>E-mails: <input type="checkbox" name="contactEmail" value="true"></td>
							<td>Calls: <input type="checkbox" name="contactPhone" value="true"></td>
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
							<td colspan="3"><input type="submit" name="sub" value="Submit"></td>
						</tr>
					</table>
				</fieldset>
			</form>

        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
	</body>
</html>