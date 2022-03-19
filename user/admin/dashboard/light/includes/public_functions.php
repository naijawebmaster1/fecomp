<?php 

    session_start();
 
/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */


function getHotelRooms($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['hotel-room'];
	$sql = "SELECT * FROM hotel_rooms WHERE room_slug='$post_slug' /* AND published=true */ ";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	if ($post) { //
		// get the topic to which this post belongs
	//	$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}

?>