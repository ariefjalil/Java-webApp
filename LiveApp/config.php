<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'aiwebdev_ajx'); //localhost:root
define('DB_PASSWORD', 'ajx@aiwebdev'); //localhost:""
define('DB_NAME', 'aiwebdev_ajx'); //localhost:userdefine
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>