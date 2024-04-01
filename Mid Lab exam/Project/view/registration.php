<html>
    <head>
        <title>FROM</title>
    </head>
    <body>
    <table border=1>
        <table>
        <tr  >
            <td align="left">Quick Egale Currier Service<</td><br>
</tr>
<tr>
            <td align="right"><a href="publichome.php" > Home </a> |
        <a href="login.php" > Login </a>| 
        <a href="profile.php" > profile </a> |
        <a href="registration.php" > Registration </a> </td>
</tr>
</table>
</tr>
<tr><td align="center">
<?php
/* <?phpif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    
    // Redirect to another page with form data
    header("Location: replay.php?name=$name&email=$email&username=$username");
    exit();
}
?>
   
    
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="">*/
 ?>

 <form method="post" action="replay.php" enctype="">
            Name: <br>
            <input type="text" name="name" value="" /><br>
          <br>
            <hr width="152px"  align="left">
            
            Email: <br>
            <input type="email" name="email" value="" /><br>
            <br>
            <hr width="152px"  align="left">
        
            username: <br>
            <input type="text" name="username" value="" /><br>
            <br>
            <hr width="152px"  align="left">
            password: <br>
            <input type="password" name="password" value="" /><br>
            <br>
            <hr width="152px"  align="left">
           
            <fieldset>
            <legend>Gender</legend>
            Gender: <br>
            <input type="radio" name="gender" value="m"/> Male
            <input type="radio" name="gender" value="f"/> Female
            <input type="radio" name="gender" value="o"/> Other <br/>
       <br>
        </fieldset>
        <fieldset>
            <legend>Date of Birth</legend>
           &nbsp &nbsp  dd &nbsp &nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dob" size="1px" value=""> /
            <input type="text" name="dob" size="1px" value=""> /
            <input type="text" name="dob" size="1px" value="">
            <hr width="152px"  align="left">
            <br>
        </fieldset><br>
       
        <a href="file.php">Upload DOcument</a>
       
        
        
        
        <hr width="152px"  align="left">
        
       <input type="submit" name="submit" value="Submit">
       
        
        

          </form>    
</td>
</tr>
    </table>
    </body>
</html>