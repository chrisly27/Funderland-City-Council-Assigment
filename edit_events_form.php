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
			
	$query = mysql_query("SELECT * FROM Funderland_Classes WHERE Class_ID = $id");
	$row = mysql_fetch_object($query);
	echo mysql_error();
	
	
	//get the value of each column and add to local variable
	$ID = $row->Class_ID;
	$name = $row->Class_Name;
	$week = $row->Week_Number;
	$work = $row->Work_Intensity;
	$cap = $row->Capacity;
	$centre = $row->Centre_Name;
	
	mysql_close($con);
	
?>
	<div id='middle'>
	<h1>Update <?php echo $name; ?> Class</h1>

	<form action="edit_events.php?id=<?php echo $id ?>" method="POST">
	
	<div class="bold">Class Name: </div><br/>
	<input type="text" value="<?php echo $name; ?>" name="class"><br/>
	<br/>
	<div class="bold">Capacity: </div><br/>
	<input type="text" value="<?php echo $cap; ?>" name="capac"><br/>
	<br/>
	<div class="bold">Week Number: </div>(Enter 1 or 2 only)<br/>
	<input type="number" value="<?php echo $week; ?>" name="week_num"><br/>
	<br/>
	<div class="bold">Work Intensity: </div>(Enter Beginners, Medium or Higher)<br/>
	<input type="text" value="<?php echo $work; ?>" name="work_int"><br/>
	<br/>
	<div class="bold">Centre Name: </div>(Enter Tendon, Cornhill or Poker)<br/>
	<input type="text" value="<?php echo $centre; ?>" name="centre_na"><br/>
	<br/>
	
	<input type="submit" value="Update">	
	</form>
	<br/>
	
	<form action="view_event.php">
	<input  type="submit" value="Cancel">
	</form>
	</div>
	
		<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>

</body>
</html>