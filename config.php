<?php

$con = mysqli_connect("localhost","root","","realestatephp");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MonoLinePhp MySQL: " . mysqli_connect_error();
	}
?>