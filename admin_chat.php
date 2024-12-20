<?php
require 'db.php';
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
$member_id = $_SESSION['member_id'];
$selected_member_id = isset($_GET['receiver_id']) ? intval($_GET['receiver_id']) : null;

$selected_member_username = null;
if ($selected_member_id) {
    $memberQuery = $conn->query("SELECT member_username FROM members WHERE member_id = $selected_member_id");
    $memberRow = $memberQuery->fetch_assoc();
    $selected_member_username = $memberRow ? $memberRow['member_username'] : 'Unknown';
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">
    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/chat.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favi.png">
</head>

<body>
    <div id="layout-wrapper">
        <?php include './inc/admin_header.php'; ?>
        <?php include './inc/admin_sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <main class="content">
                        <div class="container p-0" >
                            <div class="card" >
                                <form id="messageForm">
                                    <div class="row g-0"  >
                                        <div class="col-12 col-lg-5 col-xl-3 border-right"
                                            style="border: 1px solid #e5e3e3; padding:10px; padding-top:30px; ">
                                            <ul class="list-group" style="cursor:pointer;" >
                                                <?php
                                                $result = $conn->query("SELECT member_id, member_username FROM members WHERE member_id != $member_id");
                                                while ($row = $result->fetch_assoc()) {
                                                    $activeClass = ($selected_member_id == $row['member_id']) ? 'active' : '';
                                                    echo "<li class='list-group-item $activeClass' data-id='{$row['member_id']}'>
                                                            <div class='d-flex align-items-center'>
                                                                <img src='assets/images/users/user.png' class='avatar-xs rounded-circle' alt=''>
                                                                <div class='flex-grow-1 ms-2'>{$row['member_username']}</div>
                                                            </div>
                                                        </li>";
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="col-12 col-lg-7 col-xl-9" >
                                            <div class="chat-messages p-4" id="chatMessages" style="height:500px;" >
                                                <?php
                                                if ($selected_member_id) {
                                                    $messages = $conn->query("SELECT * FROM messages WHERE (sender_id = $member_id AND receiver_id = $selected_member_id) OR (sender_id = $selected_member_id AND receiver_id = $member_id) ORDER BY massege_date, massege_time");
                                                    while ($msg = $messages->fetch_assoc()) {
                                                        $isSender = $msg['sender_id'] == $member_id;
                                                        echo "<div class='chat-message-" . ($isSender ? "right" : "left") . " pb-4'>
                                                                
                                                            
                                                                <div class='flex-shrink-1  rounded py-2 px-3 " . ($isSender ? "mr-3" : "ml-3") . "' style='background-color: #47afff; color:#eaeaea; ' >
                                                                    <div class='font-weight-bold mb-1' style='color: #ffffff; font-weight:600;'></div>
                                                                    <div class='msg' style='color: #ffffff; font-weight:600;'> {$msg['massege_description']}</div>
                                                                
                                                                    <div class='time' style='font-size: 10px; color:#eaeaea;'>
                                                                       {$msg['massege_time']}
                                                                     </div>
                                                                    </div>
                                                                 
                                                            </div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="flex-grow-0 py-3 px-4 border-top">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="massege_description"
                                                        placeholder="Type your message" required>
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <?php include './inc/dash_footer.php';?>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

   

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/glightbox/js/glightbox.min.js"></script>
    <script src="assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>
    <script src="assets/js/pages/chat.init.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const messageForm = document.getElementById('messageForm');
            const chatMessages = document.getElementById('chatMessages');

            messageForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(messageForm);
                const selectedId = document.querySelector('.list-group-item.active').dataset.id;

                fetch('send_message.php?receiver_id=' + selectedId, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            chatMessages.innerHTML += `<div class='chat-message-right pb-4'>
                                                        
                                                        <div class='flex-shrink-1 rounded py-2 px-3 mr-3' style='background-color: #47afff; font-weight:600; color:#ffffff; '>
                                                            ${data.message}
                                                        </div>
                                                    </div>`;
                            messageForm.reset();
                        }
                    });
            });

            document.querySelectorAll('.list-group-item').forEach(item => {
                item.addEventListener('click', function () {
                    const selectedId = this.dataset.id;
                    window.location.href = '?receiver_id=' + selectedId;
                });
            });
        });
    </script>
</body>

</html>