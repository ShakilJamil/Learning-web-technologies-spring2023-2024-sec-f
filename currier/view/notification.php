<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <style>
        .notification {
            background-color: #f2f2f2;
            padding: 20px;
            margin: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Notifications</h1>
    <div class="notification">
        <?php
        // Check if notifications are set in session
        session_start();
        if (isset($_SESSION['notifications']) && !empty($_SESSION['notifications'])) {
            // Display notifications
            foreach ($_SESSION['notifications'] as $notification) {
                echo "<p>$notification</p>";
            }
            // Clear notifications after displaying
            unset($_SESSION['notifications']);
        } else {
            echo "<p>No notifications to display.</p>";
        }
        ?>
    </div>
</body>
</html>
