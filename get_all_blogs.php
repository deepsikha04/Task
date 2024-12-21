<?php
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {

$sql = "SELECT * FROM blogs";
$result = $con->query($sql);

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;

}
}

header('Content-Type: application/json');
echo json_encode($blogs);

$con->close();
?>
