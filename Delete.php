<html>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="view_booking.css" />
</head>

<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/view_booking_header.php"; ?><!--Header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	<?php include "Connection/connection.php"; ?><!--connection to de database-->
	
	<?php
	//getting the ID from address bar
	$id = $_GET['id']; //getting the value from the address bar
	if (!is_numeric($id)) //checking if it is a number
		{
			echo " - Sorry, there appears to have been an error.";
			exit;
		}
	$sql = "DELETE FROM `bg70ng`.`Funderland_Booking_Detail` WHERE `Funderland_Booking_Detail`.`Booking_ID` = '$id' ";
	//echo $sql;
	
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
	
	echo "<h3>The Record was successfully removed from the database. Thank You!!!</h3>";
	
	mysql_close($con);
	
?>

	<form action="view_booking.php">
	<input type="submit" value="Back to Film List"><br/>
	</form>

	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>

</body>
</html>