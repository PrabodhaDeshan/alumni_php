<?php

session_start(); 

require './../db.php'; 

$target_dir = "uploads/receipt/"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email_address = htmlspecialchars(trim($_POST['email_address']));


    if (isset($_SESSION['member_id'])) {
        $renewal_id = $_SESSION['member_id'];
    } else {
        echo "Session ID not found. Please log in.";
        exit;
    }

    if (isset($_FILES["receipt"]) && $_FILES["receipt"]["error"] == UPLOAD_ERR_OK) {
        $fileName = date("YmdHis") . basename(str_replace(" ", "_", $_FILES["receipt"]["name"]));
        $targetFilePath = $target_dir . $fileName;

        if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $targetFilePath)) {
          
            $sql = "INSERT INTO member_renewal (full_name, email_address, member_id, receipt,created_at) 
                    VALUES ('$full_name', '$email_address', '$renewal_id', '$fileName',CURRENT_DATE)";
            if ($conn->query($sql)) {
                ?>
                <script type="text/javascript">
                    alert("Data added successfully!");
                    window.location.replace("./../admin_member_renewal.php");
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
