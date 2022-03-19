<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'server3.hostnownow.com');
define('DB_USERNAME', 'fecompor_fecomp');
define('DB_PASSWORD', 'fecompor_fecomp');
define('DB_NAME', 'fecompor_fecomp');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>