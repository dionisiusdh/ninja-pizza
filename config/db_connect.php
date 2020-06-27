<?php 
	// Connect to database using MySQLI or PDO
	$conn = mysqli_connect('localhost', 'dion', 'test1234', 'ninjas_pizza');

	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error(); 
	}

 ?>