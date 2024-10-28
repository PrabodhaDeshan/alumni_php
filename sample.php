<?php
require 'db.php';
session_start();
if (!isset($_SESSION['member_id']) || $_SESSION['role'] !== '1') {
    header("Location: admin_dashboard.php");
    exit();
}
$member_id = $_SESSION['member_id'];
$selected_member_id = isset($_GET['receiver_id']) ? intval($_GET['receiver_id']) : null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Chat | Velzon - Admin & Dashboard Template</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- glightbox css -->
<link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">

<!-- Layout config Js -->
<script src="assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/app.min.css" />
    <link rel="stylesheet" href="assets/css/chat.css" />


</head>
<body>
    <div id="layout-wrapper">
        <?php include './inc/admin_header.php'; ?>
        <?php include './inc/admin_sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <main class="content">
                        <div class="container p-0">
                            <div class="card">
                                <form id="messageForm">
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-5 col-xl-3 border-right" style="border: 1px solid #e5e3e3; padding:10px; padding-top:30px;">
                                            <ul class="list-group">
                                                <?php
                                                $result = $conn->query("SELECT member_id, member_username FROM members WHERE member_id != $member_id");
                                                while ($row = $result->fetch_assoc()) {
                                                    $activeClass = ($selected_member_id == $row['member_id']) ? 'active' : '';
                                                    echo "<li class='list-group-item $activeClass' data-id='{$row['member_id']}'>
                                                            <div class='d-flex align-items-center'>
                                                                <img src='assets/images/users/avatar-2.jpg' class='avatar-xs rounded-circle' alt=''>
                                                                <div class='flex-grow-1 ms-2'>{$row['member_username']}</div>
                                                            </div>
                                                        </li>";
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="col-12 col-lg-7 col-xl-9">
                                            <div class="chat-messages p-4" id="chatMessages">
                                                <?php
                                                if ($selected_member_id) {
                                                    $messages = $conn->query("SELECT * FROM messages WHERE (sender_id = $member_id AND receiver_id = $selected_member_id) OR (sender_id = $selected_member_id AND receiver_id = $member_id) ORDER BY massege_date, massege_time");
                                                    while ($msg = $messages->fetch_assoc()) {
                                                        $isSender = $msg['sender_id'] == $member_id;
                                                        echo "<div class='chat-message-" . ($isSender ? "right" : "left") . " pb-4'>
                                                                <div>
                                                                    <img src='assets/images/users/avatar-" . ($isSender ? "1" : "3") . ".png' class='rounded-circle mr-1' width='40' height='40'>
                                                                    <div class='text-muted small text-nowrap mt-2'>{$msg['massege_time']}</div>
                                                                </div>
                                                                <div class='flex-shrink-1 bg-light rounded py-2 px-3 " . ($isSender ? "mr-3" : "ml-3") . "'>
                                                                    <div class='font-weight-bold mb-1'>" . ($isSender ? "You" : $row['member_username']) . "</div>
                                                                    {$msg['massege_description']}
                                                                </div>
                                                            </div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="flex-grow-0 py-3 px-4 border-top">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="massege_description" placeholder="Type your message" required>
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
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">&copy; <?= date('Y'); ?> Velzon.</div>
                        <div class="col-sm-6 text-sm-end">Design & Develop by Themesbrand</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

   
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- glightbox js -->
    <script src="assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- fgEmojiPicker js -->
    <script src="assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>

    <!-- chat init js -->
    <script src="assets/js/pages/chat.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messageForm = document.getElementById('messageForm');
            const chatMessages = document.getElementById('chatMessages');

            messageForm.addEventListener('submit', function(e) {
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
                        // Append the new message to the chat window
                        chatMessages.innerHTML += `<div class='chat-message-right pb-4'>
                                                        <div>
                                                            <img src='assets/images/users/avatar-1.png' class='rounded-circle mr-1' width='40' height='40'>
                                                            <div class='text-muted small text-nowrap mt-2'>${data.time}</div>
                                                        </div>
                                                        <div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
                                                            <div class='font-weight-bold mb-1'>You</div>
                                                            ${data.message}
                                                        </div>
                                                    </div>`;
                        messageForm.reset();
                    }
                });
            });

            document.querySelectorAll('.list-group-item').forEach(item => {
                item.addEventListener('click', function() {
                    const selectedId = this.dataset.id;
                    window.location.href = '?receiver_id=' + selectedId;
                });
            });
        });
    </script>
</body>
</html>
