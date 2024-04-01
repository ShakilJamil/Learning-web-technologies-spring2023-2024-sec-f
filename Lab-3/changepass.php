<?php
session_start();


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];


if ($_SESSION['password'] !== $currentPassword) {
    echo "Current password is incorrect.";
   
} elseif ($newPassword !== $confirmPassword) {
    echo "New password and confirm password do not match.";
   
} else {
    
    $_SESSION['password'] = $newPassword;
    echo "Password updated successfully.";
    
}

?>