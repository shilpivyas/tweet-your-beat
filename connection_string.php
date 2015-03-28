<?php

$database       = 'tweetyourbeat';
$server_name    = 'localhost';
$username       = 'root';
$password       = 'blackid18';

$conn = mysql_connect($server_name, $username, $password);

if(!$conn) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($database);

?>
