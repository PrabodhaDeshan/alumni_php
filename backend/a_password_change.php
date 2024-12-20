<?php

require 'db.php';

session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}


$member_id = $_GET['member_id'];
$result = $conn->query("SELECT * FROM members WHERE member_id=$member_id");
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
   
    
    $sql = "UPDATE members SET password='$password', confirm_password='$confirm_password' WHERE member_id=$member_id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: view_members.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>