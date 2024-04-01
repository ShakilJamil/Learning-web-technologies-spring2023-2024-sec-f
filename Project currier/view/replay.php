<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if (strlen($password) < 8) {
       
        header("Location: registration.php?error=password_length");
        exit();
    }

    // Store form data in session
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
   
    
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        echo "Form submitted successfully!<br>";
        echo "<html><body><a href='login.php'>Login Now</a></body></html><br>";
        echo "<html><body><a href='publichome.php'>Home</a></body></html><br>";
        $cookie_name = "some_cookie";
        $cookie_username = $username;
      
setcookie($cookie_name, $cookie_username, time() + (86400 * 30), "/"); // 86400 = 1 day
$cookie_pass = $password;
setcookie('flag', $cookie_pass, time() + (86400 * 30), "/"); // 86400 = 1 day

       // header('Location: ../controller/loginCheck.php');
       }else {
        echo "Form data not found.";
    }

    exit();
}
?>
