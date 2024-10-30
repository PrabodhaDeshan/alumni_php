<?php

require './../db.php'; 

$target_dir = "uploads/receipt"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email_address = htmlspecialchars(trim($_POST['email_address']));
    $membership_type = htmlspecialchars(trim($_POST['membership_type']));

    if (isset($_FILES["receipt"]) && $_FILES["receipt"]["error"] == UPLOAD_ERR_OK) {
        $fileName = date("YmdHis") . basename(str_replace(" ", "_", $_FILES["receipt"]["name"]));
        $targetFilePath = $target_dir . $fileName;

        if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $targetFilePath)) {
            $sql = "INSERT INTO member_renewal (full_name, email_address,membership_type, receipt) VALUES ('$full_name', '$email_address','$membership_type', '$fileName')";
            if ($conn->query($sql)) {
                ?>
                <script type="text/javascript">
                    alert("Data added successfully!");
                    window.location.replace("./../member_renewal.php");
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
