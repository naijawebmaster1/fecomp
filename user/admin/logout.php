<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: index.php');



if (isset($_SESSION['loggedin']) && (time() - $_SESSION['loggedin'] > 180)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header('Location: index.php');

}
$_SESSION['loggedin'] = time(); // update last activity time stamp
header('Location: index.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="100"> 


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>