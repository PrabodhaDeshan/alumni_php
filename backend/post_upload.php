<?php

require './../db.php'; 

$target_dir = "uploads/"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post_title = htmlspecialchars(trim($_POST['post_title']));
    $post_description = htmlspecialchars(trim($_POST['post_description']));

    if (isset($_FILES["post_image1"]) && $_FILES["post_image1"]["error"] == UPLOAD_ERR_OK) {
        $fileName = date("YmdHis") . basename(str_replace(" ", "_", $_FILES["post_image1"]["name"]));
        $targetFilePath = $target_dir . $fileName;

        if (move_uploaded_file($_FILES["post_image1"]["tmp_name"], $targetFilePath)) {
            $sql = "INSERT INTO post (post_title, post_description, post_image1) VALUES ('$post_title', '$post_description', '$fileName')";
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
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}

$conn->close();
?>
