<?php
session_start();

if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    echo json_encode(["success" => false, "message" => "Unauthorized access"]);
    exit();
}

require 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['post_id'])) {
    $postId = $conn->real_escape_string($data['post_id']);

    $sql = "UPDATE post SET post_status = 1 WHERE post_id = $postId";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Post approved successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating record: " . $conn->error]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}

$conn->close();
?>
