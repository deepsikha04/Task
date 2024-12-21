<?php
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$data = json_decode(file_get_contents("php://input"), true);

$title = $data['title'];
$description = $data['description'];
$category = $data['category'];

$sql = "INSERT INTO blogs (title, description, category) VALUES ('$title', '$description', '$category')";

if ($con->query($sql) === TRUE) {
    echo json_encode(["message" => "Blog created successfully"]);
} else {
    echo json_encode(["error" => "Error: " . $con->error]);
}
}

$con->close();
?>
