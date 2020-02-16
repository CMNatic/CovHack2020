<?php
session_start();
$host = "localhost"; /* Host name */
$username = "covsit"; /* User */
$password = "covhack2020"; /* Password */
$dbname = "covsit"; /* Database name */

$connection = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$connection) {
 die("Connection to MYSQL Database has failed " . mysqli_connect_error());
}
