<?php
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve inputs array
    $inputs = $_POST['inputs'];

    // Store inputs array in session
    $_SESSION['form_inputs'] = $inputs;

    // Redirect to another page
    header("Location: ../view/publichome.php");
    exit();
}
?>
