<html>
<head>
<title>Funderland City Council</title>
<link  rel="stylesheet" type="text/css" href="add.css" />
</head>
<?php include "AdditionFiles/body.php"; ?><!--Adding background colour and the font-->
<body>
	<?php include "AdditionFiles/add_header.php"; ?><!--Header of the page-->
	<?php include "AdditionFiles/menu.php"; ?><!--Menu-->
	
	<div id="middle">
	<form action="add_form_process.php" method="POST">
	
	Class Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="box" type="text" name="class" required><br/>
	Week Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="box" type="number" name="week" required><br/>
	Capacity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="box" type="text" name="capacity"><br/>
	
	Work Intensity: &nbsp;&nbsp;&nbsp;
	<select class="box" name="work" required>
	<option value="">Select</option>
	<option value="Beginners">For Beginners</option>
	<option value="Medium">Medium Intensity</option>
	<option value="Higher">Higher Intensity</option>
	</select><br/>
	
	Centre Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select class="box" name="centre" required>
	<option value="">Select</option>
	<option value="Tendon">Tendon Centre</option>
	<option value="Cornhill">Cornhill Centre</option>
	<option value="Poker">Poker Centre</option>
	</select>
	
	<br/><br/><br/>
	
	<input class="bold" type="submit" value="Add Event"><br/>
	</form>
	
	</div>
	
	<!--footer-->
	<?php include "AdditionFiles/footer.php"; ?>
</body>
</html>