<?php

//include("test.php");
    session_start();
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
   /* if($username == "" || $password == ""){
        echo "null usernamepassword";
        header('location: ../view/login.php');
    }*/
   
    $conn = new mysqli('localhost','root','','currier');
    $sql = "SELECT * FROM registation where username='$username'and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count= mysqli_num_rows($result);


   if($count==1){
        $_SESSION['flag'] = "true";
       // setcookie('flag', 'true', time()+3000, '/');
        header('location: ../view/dashboard.php');
    }else{
        echo"invalid user";
    }

?>