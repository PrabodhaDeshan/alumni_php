<?php
require 'db.php';
session_start();

if (!isset($_SESSION['member_id'])) {
    echo json_encode(['success' => false]);
    exit();
}

$sender_id = $_SESSION['member_id'];
$receiver_id = intval($_GET['receiver_id']);
$massege_description = $_POST['massege_description'];
$massege_date = date('Y-m-d');
$massege_time = date('H:i:s');

$stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, massege_date, massege_time, massege_description) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('iisss', $sender_id, $receiver_id, $massege_date, $massege_time, $massege_description);
$success = $stmt->execute();
$stmt->close();

if ($success) {
    echo json_encode(['success' => true, 'message' => $massege_description, 'time' => $massege_time]);
} else {
    echo json_encode(['success' => false]);
}
?>
