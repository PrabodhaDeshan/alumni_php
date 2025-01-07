<?php

require './../db.php'; 

$target_dir = "uploads/pic"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $member_username = mysqli_real_escape_string($conn, $_POST['member_username']);
    $member_first_name = mysqli_real_escape_string($conn, $_POST['member_first_name']);
    $member_last_name = mysqli_real_escape_string($conn, $_POST['member_last_name']);
    $member_id_no = mysqli_real_escape_string($conn, $_POST['member_id_no']);
    $member_batch = mysqli_real_escape_string($conn, $_POST['member_batch']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $member_nic = mysqli_real_escape_string($conn, $_POST['member_nic']);
    $member_wrokplace = mysqli_real_escape_string($conn, $_POST['member_wrokplace']);
    $member_address = mysqli_real_escape_string($conn, $_POST['member_address']);
    $member_address_line2 = mysqli_real_escape_string($conn, $_POST['member_address_line2']);
    $member_designation = mysqli_real_escape_string($conn, $_POST['member_designation']);
    $member_email = mysqli_real_escape_string($conn, $_POST['member_email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] == UPLOAD_ERR_OK) {
        $fileName = date("YmdHis") . basename(str_replace(" ", "_", $_FILES["profile_pic"]["name"]));
        $targetFilePath = $target_dir . $fileName;

        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFilePath)) {
            $sql = "INSERT INTO members (member_username, member_first_name, member_last_name,member_id_no,member_batch,role, member_nic,member_wrokplace,member_address,member_address_line2,member_designation,member_email,contact_number,password,status,profile_pic) 
            VALUES ('$member_username', '$member_first_name', '$member_last_name','$member_id_no', '$member_batch','$role', '$member_nic','$member_wrokplace','$member_address','$member_address_line2','$member_designation','$member_email','$contact_number','$hashed_password','$status','$fileName')";
            if ($conn->query($sql)) {
                ?>
                <script type="text/javascript">
                    alert("Data added successfully!");
                    window.location.replace("./../member_reg.php");
                </script>
                <?php
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}

$conn->close();
?>



