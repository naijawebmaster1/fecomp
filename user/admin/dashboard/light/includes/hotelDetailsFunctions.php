<?php

        // if user clicks the Delete post button
    if (isset($_GET['deleteHotel'])) {
        $post_id = $_GET['deleteHotel'];

        include('../../../config.php');
        

        $sql = "DELETE FROM hotels WHERE slug='$post_id'";

		if (mysqli_query($conn, $sql)) {
            echo "yes";
			$_SESSION['message'] = "Post successfully deleted";
			 header("location: ../index.php#hotels");
			exit(0);
		}
    }
    







    function getHotelRooms($slug)
{

}


?>