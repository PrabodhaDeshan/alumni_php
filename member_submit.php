<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $member_username = $conn->real_escape_string($_POST['member_username']);
    $member_first_name = $conn->real_escape_string($_POST['member_first_name']);
    $member_last_name = $conn->real_escape_string($_POST['member_last_name']);
    $member_id_no = $conn->real_escape_string($_POST['member_id_no']);
    $member_batch = $conn->real_escape_string($_POST['member_batch']);
    $member_address = $conn->real_escape_string($_POST['member_address']);
    $member_address_line2 = $conn->real_escape_string($_POST['member_address_line2']);
    $member_nic = $conn->real_escape_string($_POST['member_nic']);
    $role = $conn->real_escape_string($_POST['role']);
    $member_wrokplace = $conn->real_escape_string($_POST['member_wrokplace']);
    $member_designation = $conn->real_escape_string($_POST['member_designation']);
    $member_email = $conn->real_escape_string($_POST['member_email']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
    $status = $conn->real_escape_string($_POST['status']);


    if (empty($member_username) || empty($password) || empty($role)) {
        echo "All fields are required.";
        exit();
    }

    $query = "SELECT * FROM members WHERE member_username = '$member_username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Username already taken. Please choose another.";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
  

    $status = $conn->real_escape_string($_POST['status']);
    $query = "INSERT INTO members (member_username,member_first_name,member_last_name,member_id_no,member_batch,member_address,member_address_line2,member_nic,role,member_wrokplace,member_designation,member_email,contact_number,password,confirm_password,status)
    VALUES ('$member_username', '$member_first_name', '$member_last_name', '$member_id_no', '$member_batch', '$member_address', '$member_address_line2', '$member_nic', '$role', '$member_wrokplace', '$member_designation', '$member_email', '$contact_number', '$hashedPassword', '$confirm_password','$status')";
    if (mysqli_query($conn, $query)) {
        header("Location: add_new_members.php");
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>