<?php
$con = new mysqli('localhost', 'root', '', 'intuji');

if ($con->connect_error) {
    die("Connection error: " . $con->connect_error);
}
?>
