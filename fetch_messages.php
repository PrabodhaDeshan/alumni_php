<?php
session_start();
require 'db.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT m.message, m.timestamp, u.username AS sender_name 
        FROM messages m 
        JOIN users u ON m.sender_id = u.id 
        WHERE m.sender_id = $user_id OR m.receiver_id = $user_id 
        ORDER BY m.timestamp DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['sender_name']}:</strong> {$row['message']} <em>{$row['timestamp']}</em></p>";
}
?>
