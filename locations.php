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
        <title>Lily's Lil' Garage - Locations</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
        <!-- Scripts -->
        <script src="Scripts/mainScripts.js"></script> 
    </head>
    <body>
        <section id="background"></section>
        
        <!-- Webpage Header -->
        <?php include('header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
			<h1> Locations </h1>
			<table>
				<tr>
					<td>
						<fieldset>
							<center>
								<img src="Images/garageMountPleasant.jpg" alt="garage0" style="width:100%; height:100%;">
									<h3> LLG Mount Pleasant </h3>
									<p>1217 S. Crapo St. <br>
										Mount Pleasant, MI 48858 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Mount Pleasant">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (012) 345-6789 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<center>
								<img src="Images/garageAnnArbor.jpg" alt="garage1" style="width:83%; height:100%;">
									<h3> LLG Ann Arbor </h3>
									<p>514 Hiscock St. <br>
										Ann Arbor, MI 48103 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Ann Arbor">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (123) 456-7890 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td> 
						<fieldset>
							<center>
								<img src="Images/garagePickney.jpg" alt="garage2" style="width:100%; height:100%;">
									<h3> LLG Pickney </h3>
									<p>4082 Patterson Lake Rd <br>
										Pinckney, MI 48169 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Pickney">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (234) 567-8910 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td> 
						<fieldset>
							<center>
								<img src="Images/garageFlushing.jpg" alt="garage3" style="width:100%; height:100%;">
									<h3> LLG Flushing </h3>
									<p>165 Boman St <br>
										Flushing, MI 48433 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Flushing">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (345) 678-9012 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
										<br>
									</p>
							</center>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td> 
						<fieldset>
							<center>
								<img src="Images/garageColon.jpg" alt="garage4" style="width:100%; height:100%;">
									<h3> LLG Colon </h3>
									<p>129 W. State St <br>
										Colon, MI 49040 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Colon">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (456) 789-0123 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<center>
								<img src="Images/garageClimax.jpg" alt="garage5" style="width:100%; height:100%;">
									<h3> LLG Climax </h3>
									<p>126 W. Maple St. <br>
										Climax, MI 49034 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Climax">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>									
									<h4> Store Number: </h4>
									<p> (567) 890-1234 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<center>
								<img src="Images/garageSetagaya-Ku.jpg" alt="garage5" style="width:100%; height:100%;">
									<h3> LLG Setagaya-Ku </h3>
									<p>26-3, Kamikitazawa 3-Chōme <br>
										Setagaya-Ku, Tokyo <br>
										Japan 156-0057 <br>
									</p>
									<!-- Sets the user's store location to the specific store on orderOnline.php -->
									<form action="orderOnline.php" method="post">
										<input type="hidden" name="storeLocation" value="Setagaya-Ku">
										<input type="submit" class="linkButton" name="submitButton" value="Order Online Now!" title="Browse our menu">
									</form>
									<h4> Store Number: </h4>
									<p> (678) 901-2345 </p>
									<h4> Hours: </h4>
									<p> Monday: 8am-11pm <br>
										Tuesday: 8am-11pm <br>
										Wednesday: 8am-11pm <br>
										Thursday: 8am-11pm <br>
										Friday: 8am-1am <br>
										Saturday: 7am-1am <br>
										Sunday: 7am-10pm <br>
									</p>
							</center>
						</fieldset>
					</td>
					<td>
						<center> 
							<img src="Images/garageNewLocations.jpg" alt="garage7" style="width:70%; height:50%;">
							<h1>New locations to be added soon!</h1>
						</center>
					</td>
				</tr>

			</table>
        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>

