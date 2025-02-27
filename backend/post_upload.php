<?php

require './../db.php'; 
session_start(); 

$target_dir = "uploads/"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post_title = htmlspecialchars(trim($_POST['post_title']));
    $post_description = htmlspecialchars(trim($_POST['post_description']));
    $post_status = htmlspecialchars(trim($_POST['post_status']));
    $post_category = htmlspecialchars(trim($_POST['post_category']));
    $tags = htmlspecialchars(trim($_POST['tags']));
    $imageFields = ['post_image1', 'post_image2', 'post_image3', 'post_image4', 'post_image5'];

    $uploadedFiles = [];
    if (isset($_FILES['post_images']) && count($_FILES['post_images']['name']) > 0) {
        foreach ($_FILES['post_images']['name'] as $key => $name) {
            if ($key >= 5) break; 
            if ($_FILES['post_images']['error'][$key] === UPLOAD_ERR_OK) {
                $fileName = date("YmdHis") . "_" . basename(str_replace(" ", "_", $name));
                $targetFilePath = $target_dir . $fileName;

                if (move_uploaded_file($_FILES['post_images']['tmp_name'][$key], $targetFilePath)) {
                    $uploadedFiles[] = $fileName;
                }
            }
        }
    }

    while (count($uploadedFiles) < 5) {
        $uploadedFiles[] = null;
    }

    $member_id = isset($_SESSION['member_id']) ? $_SESSION['member_id'] : null;

    $sql = "INSERT INTO post (post_title, post_description, post_status,post_category,tags, admin_id, post_image1, post_image2, post_image3, post_image4, post_image5) 
            VALUES ('$post_title', '$post_description', '$post_status', '$post_category','$tags',
            " . ($member_id !== null ? "'$member_id'" : "NULL") . ",
            " . (isset($uploadedFiles[0]) ? "'{$uploadedFiles[0]}'" : "NULL") . ", 
            " . (isset($uploadedFiles[1]) ? "'{$uploadedFiles[1]}'" : "NULL") . ", 
            " . (isset($uploadedFiles[2]) ? "'{$uploadedFiles[2]}'" : "NULL") . ", 
            " . (isset($uploadedFiles[3]) ? "'{$uploadedFiles[3]}'" : "NULL") . ", 
            " . (isset($uploadedFiles[4]) ? "'{$uploadedFiles[4]}'" : "NULL") . ")";

    if ($conn->query($sql)) {
        ?>
        <script type="text/javascript">
            alert("Data added successfully!");
            window.location.replace("./../add_posts.php");
        </script>
        <?php
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
