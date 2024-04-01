<?php
session_start();

// Add notification to session
$_SESSION['notifications'][] = "This is a notification.";

// Redirect to notification page
header("Location: ../view/notification.php");
exit();
?>
