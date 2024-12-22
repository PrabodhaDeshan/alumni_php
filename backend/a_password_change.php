<?php
session_start();

if (!isset($_SESSION['member_id'])) {
    header("Location: admin_dashboard.php");
    exit();
}

require './../db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $member_id = $_SESSION['member_id'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($new_password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit();
    }

    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE members SET password = '$hashed_password' WHERE member_id = '$member_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Password changed successfully.";
    } else {
        echo "An error occurred while updating the password: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header("Location: ../admin_password_change.php");
    exit();
}
?>
