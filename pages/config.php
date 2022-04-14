<?php

//Database params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'labautomation');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    // echo "Connected Successfully";
}

//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URL ROOT (Dynamic Links)
define('URLROOT', 'localhost/labAutomation');

//Sitename
define('SITENAME', 'Lab Automation');

