<?php
	$conn = new mysqli("localhost","root","Para#3659","crud");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>