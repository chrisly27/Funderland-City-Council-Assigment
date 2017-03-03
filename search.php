<!DOCTYPE html>
<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="search.css" />
</head>
<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php
		//check to see if form has been posted, if it has execute the query on
		//i.e. send the SQL to the server.
		echo "<div id='container' >";
		if (!empty($_POST))
		{
			include "Connection/connection.php";//adding the connection
			
			//creating the variables from the form
			$class = $_POST['class'];
			$intensity = $_POST['intensity'];
			
			//checking the the input is empty and if not then to execute the code below
			if (!empty($class))
			{
				//select the data from the table where the name is similar to the user input
				$sql = "select * from Funderland_Classes where Class_Name = '$class' ";
				$sql = "select * from Funderland_Classes where Class_Name like '%$class%' ";
		
				$result = mysql_query($sql);
				echo "<h1>We found the following:<hr /></h1>";
				echo "<table border='1'> ";
				while($row = mysql_fetch_array($result))
				{
					//display the result to the screen
					echo "<tr><td class='class'>".$row['Class_Name']. "</td>
							<td>".$row['Work_Intensity']."</td>
							<td>".$row['Centre_Name']."</td>
							<td><a href=\"booking.php?id=" . $row ["Class_ID"] . "\">Book It</a></td>
						 </td>";
				}
				echo "</table>";
			}
			else
			{
				//select data from the table where work intensity is similar to one the user selected
				$sql = "select * from Funderland_Classes where Work_Intensity = '$intensity' ";
				$sql = "select * from Funderland_Classes where Work_Intensity like '%$intensity%' ";
		
				$result = mysql_query($sql);
				echo "<h1>We found the following:<hr /></h1>";
				echo "<table border='1'> ";
				while($row = mysql_fetch_array($result))
				{
					//display the result to the screen
					echo "<tr><td class='class'>".$row['Class_Name']. "</td>
							<td>".$row['Work_Intensity']."</td>
							<td>".$row['Centre_Name']."</td>
							<td><a href=\"booking.php?id=" . $row ["Class_ID"] . "\">Book It</a></td>
						 </td>";
				}
				echo "</table>";
			}
		
		mysql_close($con);
	}
	else
	{

	?>

	<h1>Search for the Class</h1>
	<p>You can search  for class by typing in the class name you want
		or you can select the intensity of work below but you must do only one.</p>
	
	<!--requires f=de user to enter something in here-->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" />
	<input name="class" type="text" id="class" placeholder="Enter Class Here"/><br><br><br>
	
	<!--requires de user to select something from the drop down-->
	<select name="intensity">
	<option value="">Select Intensity</option>
	<option value="Beginners">For Beginners</option>
	<option value="Medium">Medium Intensity</option>
	<option value="Higher">Higher Intensity</option>
	</select><br><br>
	
	<input type="submit" name="Submit" value="Search" />
	</form>
	
	
	<?php
	}
		include "Connection/connection.php";//adding the connection
		
		$result = mysql_query("SELECT DISTINCT Class_Name FROM Funderland_Classes");
		echo "<div class='text_columns1' id='list_container'> ";
		while($row = mysql_fetch_array($result))
		{
				echo '<h4>'.$row['Class_Name'].'</h4>'; //print the album title
		}
		echo "</div>";
		
		//back to search page
		echo "<p> </p>";
		echo "<a class='button' href='search.php'>Back to Search Page<a/>";
		
		//back to homepage page
		echo "<p> </p>";
		echo "<a class='button' href='index.php'>Go Home<a/>";
				
		echo "</div>";
	?>

	<!--adding the footer-->
	<?php include "AdditionFiles/footer.php"; ?>

</body>
</html>