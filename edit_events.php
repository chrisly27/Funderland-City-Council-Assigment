<html>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="edit_events.css" />
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
	
	$class_name = $_POST["class"];
	$week_number = $_POST["week_num"];
	$work_intensity = $_POST["work_int"];
	$capacity = $_POST["capac"];
	$centre_name = $_POST["centre_na"];

	$sql = "UPDATE `bg70ng`.`Funderland_Classes` 
			SET 
				`Class_Name` = '$class_name', 
				`Week_Number` = '$week_number', 
				`Work_Intensity` = '$work_intensity', 
				`Capacity` = '$capacity', 
				`Centre_Name` = '$centre_name' 
			WHERE 
				`Class_ID` = '$id' ";
	

	echo $sql;
	
	if (!mysql_query($sql, $con))
	{
		die('Error: ' . mysql_error());
	}
	
	echo "<div id='middle'> ";
	echo "<h1>Thank You very much the " . $class_name . " class was updated successfully.</h1>";
	
	echo "
	<form action='view_event.php'>
	<input  type='submit' value='Back to View Events'>
	</form>";
	echo "</div>";
?>
		<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>

</body>
</html>