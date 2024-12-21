<?php
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] === 'PUT'){
$id = (int)$_GET['id']; 
$data = json_decode(file_get_contents("php://input"), true);

$title = $data['title'];
$description = $data['description'];
$category = $data['category'];

$sql = "UPDATE blogs SET title = '$title', description = '$description', category = '$category' WHERE id = $id";

if ($con->query($sql) === TRUE) {
    echo json_encode(["message" => "Blog updated successfully"]);
} else {
    echo json_encode(["error" => "Error: " . $con->error]);
}
}

$con->close();
?>
