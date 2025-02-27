<?php

require './../db.php'; 
session_start(); 

$target_dir = "uploads/"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $item_name = mysqli_real_escape_string($conn, trim($_POST['item_name']));
    $item_price = mysqli_real_escape_string($conn, trim($_POST['item_price']));
    $small_desc = mysqli_real_escape_string($conn, trim($_POST['small_desc']));
    $item_desc = mysqli_real_escape_string($conn, trim($_POST['item_desc']));
    $member_id = isset($_SESSION['member_id']) ? $_SESSION['member_id'] : null;

    $uploadedFiles = [];
    if (isset($_FILES['item_images']) && count($_FILES['item_images']['name']) > 0) {
        foreach ($_FILES['item_images']['name'] as $key => $name) {
            if ($key >= 4) break; 
            if ($_FILES['item_images']['error'][$key] === UPLOAD_ERR_OK) {
                $fileName = date("YmdHis") . "_" . basename(str_replace(" ", "_", $name));
                $targetFilePath = $target_dir . $fileName;

                if (move_uploaded_file($_FILES['item_images']['tmp_name'][$key], $targetFilePath)) {
                    $uploadedFiles[] = mysqli_real_escape_string($conn, $fileName);
                } else {
                    echo "Error uploading file: " . $name;
                }
            }
        }
    }

    while (count($uploadedFiles) < 4) {
        $uploadedFiles[] = "NULL";
    }

    $sql = "INSERT INTO product_items (item_name, item_price, small_desc, item_desc, member_id, item_image1, item_image2, item_image3, item_image4) 
            VALUES (
                '$item_name', 
                '$item_price', 
                '$small_desc', 
                '$item_desc', 
                " . ($member_id !== null ? "'$member_id'" : "NULL") . ", 
                '" . $uploadedFiles[0] . "', 
                '" . $uploadedFiles[1] . "', 
                '" . $uploadedFiles[2] . "', 
                '" . $uploadedFiles[3] . "'
            )";

    if ($conn->query($sql)) {
        ?>
        <script type="text/javascript">
            alert("Data added successfully!");
            window.location.replace("./../add_products.php");
        </script>
        <?php
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>