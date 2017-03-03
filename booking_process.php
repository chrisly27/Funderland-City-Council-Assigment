<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="booking.css" />
</head>

	<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>

	
	
<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="booking.css" />
</head>

<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/book_header.php"; ?><!--header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	<?php include "Connection/connection.php"; ?><!--connection to de database-->
	
	<?php
	
	$id = $_GET["id"]; //getting the value from the address bar
	if (!is_numeric($id)) //checking if it is a number
		{
			echo "Sorry, there appears to have been an error.";
			exit;
		}
	
	
	
	$sex = $_POST["gender"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$age = $_POST["age"];
	$email = $_POST["email"];
	$phone = $_POST["phonenumber"];
	
	//counting how many time the email exist then if is email 2 then re-direct them to another page
	
	$sql = "INSERT INTO `bg70ng`.`Funderland_User_Detail`
			(`User_ID`, `First_Name`, `Last_Name`, `Gender`,
			`Phone_Number`, `Email_Address`) VALUES
			(NULL, '$firstname', '$lastname', '$sex', '$phone',
			'$email')";

	if (mysql_query($sql,$con))
	{
		$last_id = mysql_insert_id($con);
		//echo "New record created successfully. Last inserted ID is: " . $last_id;
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysql_error($con);
	}

	
	$sql = "INSERT INTO `bg70ng`.`Funderland_Booking_Detail` 
			(`Booking_ID`, `User_ID`, `Class_ID`) 
			VALUES (NULL, '$last_id', '$id')";
	//echo $sql;
	
	if (mysql_query($sql,$con))
	{
		$last_id = mysql_insert_id($con);
		echo "Thank you very much for taking part and for booking you class with us.";
		echo "We wish you all the best in future. Click 'Homepage' at the ";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysql_error($con);
	}
	
	
	/*
	if (!mysql_query($sql1, $con))
		{
			die('Error: ' . mysql_error());
		}
		
		echo "<h2>Your record was successfully added to the database</br>";
		echo "</br>";
		echo "Thank you very much for taking time to add a new album to our CD record.</h2>";


	echo "<a class='button' href='index.php'>Go Homepage</a>";
	*/
	?>
	
	
	<!--adding the footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>