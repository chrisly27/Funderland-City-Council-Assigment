<link  rel="stylesheet" type="text/css" href="../AdditionFiles/layout.css" />


<div id="menu">

<?php

	//if the user has login then show this tag in there if
	//if not then do not show it at all
	session_start();
	if (isset($_SESSION['loggedin']))
	{
		echo "<br><a href=\"AdditionFiles/Destroy.php"."\">Log off</a></br>";
		echo "<br></br>";
		
		echo "<br><a class='btn' href=\"index.php"."\">Homepage</a></br>";
		echo "<br></br>";
		
		echo "<br><a class='btn' href=\"view_booking.php"."\">View Booking</a></br>";
		echo "<br></br>";
		
		echo "<br><a class='btn' href=\"add_event.php"."\">Add Event</a></br>";
		echo "<br></br>";
		
		echo "<br><a class='btn' href=\"view_event.php"."\">View Event</a></br>";
		echo "<br></br>";

		echo "<br></br>";
	}
	else
	{
		echo "<br><a href=\"AdditionFiles/security.php"."\">Login</a></br>";
		echo "<br></br>";
		
		echo "<br><a class='btn' href=\"index.php"."\">Homepage</a></br>";
		echo "<br></br>";

		echo "<br><a class='btn' href=\"search.php"."\">Booking</a></br>";
		echo "<br></br>";
	}
?>

</div>
