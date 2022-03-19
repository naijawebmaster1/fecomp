<?php 

require_once 'PHPMailer/index.php';

session_start();
$username = "";
$email = "";
$errors = [];


// Post variables
$post_id = 0;
$isEditingPost = false;
$published = 0;
$title = "";
$post_slug = "";
$body = "";
$featured_image = "";
$post_topic = "";



    // if user clicks the publish post button
	if (isset($_GET['statusApproved'])) {
		$message = "";
		if (isset($_GET['statusApproved'])) {
			$message = "Post published successfully";
			$post_id = $_GET['statusApproved'];
		} 
        		
		include('../../../../config.php');

		// Attempt update query execution
		$sql = "UPDATE bookings SET status = 1 WHERE id=$post_id";
		if(mysqli_query($conn, $sql)){
			//echo "Records were updated successfully.";
			$email = $_GET['email'];
			$tnxId = $_GET['tnxId'];
			$post_id = $_GET['statusApproved'];



			approveBooking($email, $post_id);

			$_SESSION['message'] = "Post successfully deleted";
			// $hotelSlug = $_GET['hotel'];

			header("location: ../index.php#bookings");
			exit(0);
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}




        
		//togglePublishPost($post_id, $message);
    }



    // if user clicks the publish post button
	if (isset($_GET['statusDeclined'])) {
		$message = "";
		if (isset($_GET['statusDeclined'])) {
			// $message = "Post published successfully";
			$post_id = $_GET['statusDeclined'];
		} 
        		
include('../../../../config.php');

// Attempt update query execution
$sql = "UPDATE bookings SET status= 0 WHERE id=$post_id";
if(mysqli_query($conn, $sql)){
	
	//echo "Records were updated successfully.";
	$email = $_GET['email'];
	$tnxId = $_GET['tnxId'];
	$MESSAGE = $_GET['message'];



	declineBooking($email, $post_id, $MESSAGE);

	$_SESSION['message'] = "Post successfully deleted";
	$hotelSlug = $_GET['hotel'];

	 header("location: ../index.php#bookings");
	exit(0);
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


    }




































?>