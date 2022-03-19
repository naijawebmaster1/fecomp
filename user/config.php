<?php

  define ('ROOT_PATH', realpath(dirname(__FILE__)));
    define("BASE_URL", "http://http://localhost/prioclen/sleepov/");
    define("DB_SERVER", "server3.hostnownow.com");
    define("DB_USER", "fecompor_fecomp");
    define("DB_PASS", "fecompor_fecomp");
    define("DB_NAME", "fecompor_fecomp"); 

/*  define ('ROOT_PATH', realpath(dirname(__FILE__)));
    define("BASE_URL", "http://http://localhost/bluecrosshospital");
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "blue_cross_hospital"); */

    // connect to database
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if (!$conn) {
        die("Error connecting to database: " . mysqli_connect_error());
    }
    // define global constants

	
?>