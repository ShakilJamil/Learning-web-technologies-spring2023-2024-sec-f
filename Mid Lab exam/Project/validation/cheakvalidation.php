<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];

// Function to validate name and email
function validateForm($name, $email) {
    // Validate name
    if (empty($name)) {
        return "Name cannot be empty.";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    // All validations passed
    return "Success";
}

// Perform validation
$result = validateForm($name, $email);

// Display result
echo $result;
?>