<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="add.css" />
</head>
<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/add_header.php"; ?><!--Header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	<?php include "Connection/connection.php"; ?><!--connection to de database-->
	
	<?php
	
		$class_name = $_POST["class"];
		$week_number = $_POST["week"];
		$capacity = $_POST["capacity"];
		
		$work_intensity = $_POST["work"];
		$centre_name = $_POST["centre"];
	
		$sql = "INSERT INTO `bg70ng`.`Funderland_Classes` 
				(`Class_ID`, `Class_Name`, `Week_Number`, 
				`Work_Intensity`, `Capacity`, `Centre_Name`) 
				VALUES 
				(NULL, '$class_name', '$week_number', '$work_intensity', 
				'$capacity', '$centre_name')";
		
		if (!mysql_query($sql,$con))
		{
			die("Error: " . mysql());
		}
		
		echo "<div id='middle'>";
		echo "<h3>Thank you. The detail you entered has been saved and recored into 
				database. Thank You!!!</h3>";
		echo "</div>";		
		mysql_close($con);
	
	?>
	
	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>