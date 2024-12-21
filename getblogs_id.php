<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = (int)$_GET['id']; 

    $sql = "SELECT * FROM blogs WHERE id = ?";
    $stmt = $con->prepare($sql);  // Using prepared statements to prevent SQL injection

    if ($stmt === false) {
        echo json_encode(["message" => "Database query preparation failed"]);
        exit();
    }

    $stmt->bind_param("i", $id); //binding parameter

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $blog = $result->fetch_assoc();
        echo json_encode($blog);
    } else {
        echo json_encode(["message" => "Blog not found"]);
    }

    $stmt->close();
}

$con->close();
?>
