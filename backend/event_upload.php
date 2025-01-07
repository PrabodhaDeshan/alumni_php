<?php

require './../db.php'; 

$target_dir = "uploads/events"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $event_title = htmlspecialchars(trim($_POST['event_title']));
    $event_date = htmlspecialchars(trim($_POST['event_date']));
    $event_time = htmlspecialchars(trim($_POST['event_time']));
    $event_location = htmlspecialchars(trim($_POST['event_location']));
    $event_description = htmlspecialchars(trim($_POST['event_description']));

    if (isset($_FILES["event_image"]) && $_FILES["event_image"]["error"] == UPLOAD_ERR_OK) {
        $fileName = date("YmdHis") . basename(str_replace(" ", "_", $_FILES["event_image"]["name"]));
        $targetFilePath = $target_dir . $fileName;

        if (move_uploaded_file($_FILES["event_image"]["tmp_name"], $targetFilePath)) {
            $sql = "INSERT INTO events (event_title, event_date, event_time,event_location,event_description,event_image) 
            VALUES ('$event_title', '$event_date', '$event_time','$event_location', '$event_description','$fileName')";
            if ($conn->query($sql)) {
                ?>
                <script type="text/javascript">
                    alert("Data added successfully!");
                    window.location.replace("./../add_events.php");
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



