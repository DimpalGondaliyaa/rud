<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'haris7ya_crm';
$dbPassword = 'crm@12354';
$dbName = 'haris7ya_crm';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>