<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="view_events.css" />
</head>
<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/view_header.php"; ?><!--Header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	<?php include "Connection/connection.php"; ?><!--connection to de database-->
	
	<?php
	
	//getting the ID from the table
	$id = $_GET['id']; //getting the value from the address bar
	if (!is_numeric($id)) //checking if it is a number
		{
			echo "Sorry, there appears to have been an error.";
			exit;
		}
	$sql = "SELECT * FROM Funderland_Classes WHERE Class_ID = $id ";
	
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
	
	echo "<div id='middle'> ";
	echo "<h3>By Clicking on YES it will remove the record and its detail in database</h3>";
	echo "<h3>Are you sure that you want to delete this record???</h3>";

	mysql_close($con);
	
?>

<a class="button_YES" href="delete_event.php?id=<?php echo $id; ?>">YES</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="button_NO" href="view_event.php">NO</a><br />
	<?php echo "</div>"; ?>
	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>