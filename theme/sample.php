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

$status = $conn->real_escape_string($_POST['status']);
$query = "INSERT INTO messages (member_id,receiver_id,massege_description,massege_date,massege_time)
VALUES ('$member_id','$receiver_id', '$massege_description', '$massege_date', '$member_id_no')";

if ($success) {
    echo json_encode(['success' => true, 'message' => $massege_description, 'time' => $massege_time]);
} else {
    echo json_encode(['success' => false]);
}
?>




<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sender_id = $_SESSION['member_id'];
    $receiver_id = intval($_GET['receiver_id']);
    $massege_description = $_POST['massege_description'];
    $massege_date = date('Y-m-d');
    $massege_time = date('H:i:s');



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



<?php
require 'db.php';
session_start();

if (!isset($_SESSION['member_id'])) {
    echo json_encode(['success' => false]);
    exit();
}

$sender_id = $_SESSION['member_id'];
$receiver_id = intval($_GET['receiver_id']);
$massege_description = $conn->real_escape_string($_POST['massege_description']); 
$massege_date = date('Y-m-d');
$massege_time = date('H:i:s');

$status = $conn->real_escape_string($_POST['status']); 

$query = "INSERT INTO messages (member_id, receiver_id, massege_description, massege_date, massege_time)
          VALUES ('$sender_id', '$receiver_id', '$massege_description', '$massege_date', '$massege_time')";

$success = $conn->query($query); 

if ($success) {
    echo json_encode(['success' => true, 'message' => $massege_description, 'time' => $massege_time]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]); 
}
?>
