<?php
session_start();
require 'db.php';

$member_username = $_POST['member_username'];
$password = $_POST['password'];

$sql = "SELECT * FROM members WHERE member_username = '$member_username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
        $_SESSION['member_id'] = $user['member_id'];
        $_SESSION['member_username'] = $user['member_username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == '1') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: member_dashboard.php");
        }
    } else {
        $_SESSION['error'] = "Invalid password.";
        header("Location: sign_in.php");
    }
} else {
    $_SESSION['error'] = "User not found.";
    header("Location: sign_in.php");
}
?>
