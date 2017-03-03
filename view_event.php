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
		
	$result = mysql_query("SELECT * FROM Funderland_Classes");
	
	echo "<table border='1' class='container'>";
	echo "<tr class='bold'>
					<td class='height'>&nbsp;Class Name&nbsp;</td>
					<td class='height'>&nbsp;Week Number&nbsp;</td>
					<td class='height'>&nbsp;Work Intensity&nbsp;</td>
					<td class='height'>&nbsp;Capacity&nbsp;</td>
					<td class='height'>&nbsp;Centre Name&nbsp;</td>
					<td class='height'>&nbsp;Option&nbsp;</td>
					<td class='height'>&nbsp;&nbsp;Option&nbsp;</td>
			 </tr>";
	echo "<tr class='bold'>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
		 </tr>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr>
					<td>&nbsp;" . $row['Class_Name'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Week_Number'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Work_Intensity'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Capacity'] . "&nbsp;</td>
					<td>&nbsp;" . $row['Centre_Name'] . "&nbsp;</td>
					<td>&nbsp;<a href=\"edit_events_form.php?id=" . $row ["Class_ID"] . "\">Edit Event&nbsp;&nbsp;</a></td>
					<td>&nbsp;<a href=\"before_delete_events.php?id=" . $row ["Class_ID"] . "\">Delete Event&nbsp;&nbsp;</a></td>
			 </tr>";
	}
	echo "</table>";
	
	
	mysql_close($con);
	?>
	
	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>