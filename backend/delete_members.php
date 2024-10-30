<?php
require './../db.php'; 

$member_id = $_GET['member_id'];
$sql = "DELETE FROM members WHERE member_id=$member_id";

if ($conn->query($sql) === TRUE) {
    header("Location: view_members.php");
} else {
    echo "Error: " . $conn->error;
}
?>
