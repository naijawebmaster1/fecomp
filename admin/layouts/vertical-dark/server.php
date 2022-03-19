<?php 
	
	// connect to the database
	include('dbconn.php');



	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM register WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}


	$results = mysqli_query($conn, "SELECT * FROM register");


?>