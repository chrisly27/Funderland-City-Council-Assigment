<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="view_booking.css" />
</head>
<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/view_booking_header.php"; ?><!--Header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	<?php include "Connection/connection.php"; ?><!--connection to de database-->
	
	<?php
	$result = mysql_query("SELECT `Funderland_Booking_Detail`.`Booking_ID`,
							`Funderland_User_Detail`.`User_ID`,
							`Funderland_User_Detail`.`First_Name`,
							`Funderland_User_Detail`.`Last_Name`,
							`Funderland_User_Detail`.`Phone_Number`,
							`Funderland_User_Detail`.`Email_Address`,
							`Funderland_Classes`.`Class_ID`,
							`Funderland_Classes`.`Class_Name`,
							`Funderland_Classes`.`Centre_Name` 
							FROM 
							Funderland_Booking_Detail 
							LEFT JOIN `bg70ng`.`Funderland_User_Detail` 
							ON `Funderland_Booking_Detail`.`User_ID` = 
							`Funderland_User_Detail`.`User_ID` 
							LEFT JOIN `bg70ng`.`Funderland_Classes` 
							ON `Funderland_Booking_Detail`.`Class_ID` 
							= `Funderland_Classes`.`Class_ID` ;");
	
	echo "<div id='right_container'> ";
	echo "<table border='1' >";
	echo "<tr class='bold'>
					<td>&nbsp;Booking ID&nbsp;</td>
					<td>&nbsp;User ID&nbsp;</td>
					<td>&nbsp;First Name&nbsp;</td>
					<td>&nbsp;Last Name&nbsp;</td>
					<td>&nbsp;Phone Number&nbsp;</td>
					<td>&nbsp;Email Address&nbsp;</td>
					<td>&nbsp;Class ID&nbsp;</td>
					<td>&nbsp;Class Name&nbsp;</td>
					<td>&nbsp;Centre Name&nbsp;</td>
					<td>&nbsp;&nbsp;Delete Option&nbsp;</td>
			 </tr>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr>
					<td>&nbsp;" . $row['Booking_ID'] . "&nbsp;</td>
					<td>&nbsp;" . $row['User_ID'] . "&nbsp;</td>
					<td>&nbsp;" . $row['First_Name'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Last_Name'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Phone_Number'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Email_Address'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Class_ID'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Class_Name'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Centre_Name'] . "&nbsp;</td>
					<td>&nbsp;<a href=\"Before_Delete_Record.php?id=" . $row ["Booking_ID"] . "\">Delete</a></td>
			 </tr>";
	}
	echo "</table></div>";
	
	
	mysql_close($con);
	?>
	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>