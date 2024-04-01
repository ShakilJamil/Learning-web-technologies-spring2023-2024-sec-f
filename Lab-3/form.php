<html>
<head>
    <title>Change Password</title>
</head>
<body>

<form method="post" action="changeoass.php">
    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" id="current_password" required><br><br>
    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" id="new_password" required><br><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br><br>
    <input type="submit" value="Change Password">
</form>

</body>
</html>