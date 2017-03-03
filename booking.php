<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="booking.css" />
</head>

<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/book_header.php"; ?><!--header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	
	<?php include "Connection/connection.php"; ?>
	
	<?php
	//getting the ID from the table
	$id = $_GET["id"]; //getting the value from the address bar
	if (!is_numeric($id)) //checking if it is a number
		{
			echo "Sorry, there appears to have been an error.";
			exit;
		}
		
	$query = mysql_query("select * from Funderland_Classes where Class_ID = $id ");
	$row = mysql_fetch_object($query);
	echo mysql_error();	
	
	?>
	
	<!--wrapping the personal details-->
	<div id="left_container">
	<h3>Personal Detail</h3>
	
	<!--open the form for everything on the page-->
	<form action="booking_process.php?id=<?php echo $row->Class_ID;?>" method="POST">
	
	<!--gender-->
	<input type="radio" name="gender" value="male" checked>Male
	<input type="radio" name="gender" value="female">Female
	<br><br>
	
	<!--user name-->
	* First Name:<br><input type="text" name="firstname" placeholder="First Name" required><br><br>
	* Last Name:<br><input type="text" name="lastname" placeholder="Surname" required><br><br>
	
	<!--age group of the user-->
	Age Group:<br>
	<select name="age">
	<option value="">Select</option>
	<option value="10 - 14">10 - 14</option>
	<option value="15 - 18">15 - 18</option>
	<option value="19 - 25">19 - 25</option>
	<option value="over_25">Over 25</option>
	</select><br><br>
	
	<!--user email address and phone number-->
	* Email Address:<br>
	<input type="email" name="email" placeholder="me@example.com" required><br><br>
	* Phone Number:<br>
	<input type="number" name="phonenumber" placeholder="Mobile or Phone" required><br><br>
	
	</div><!--closing the wrap-->
	
	<!--wrapping the booking details-->
	<div id="right_container">
	<h3>Booking Detail</h3>
	
	<p> The details below is the confirmation of the class you have picked,
		please read it and if it is correct and happy then complete your 
		personal detail session and then confirm in order to book this close 
		for you and if you want to change the class cancel it and pick another one.</p>
	
	<!--display the class details-->
	Class: <?php echo "<div class='bold'> " . $row->Class_Name . "</div>"; ?><br>
	Intensity: <?php echo "<div class='bold'> " . $row->Work_Intensity . "</div>";?><br>
	Week: <div class="bold">Both Weeks</div><br>
	Centre Name: <?php echo "<div class='bold'> " . $row->Centre_Name . "</div>";?><br>
	</div><!--closing the wrap for the booking detail-->
	
	<!--wrapping the cancel and confirm buttons so that it can stay on the right-->
	<div id="btn_container">
	<a class="button" href="search.php">Cancel<a/><br><br>
	<input class="button" type="submit" value="Confirm">
	</div><!--closing the button wrap-->
	
	</form><!--closing the form-->	
	
	<!--adding the footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>