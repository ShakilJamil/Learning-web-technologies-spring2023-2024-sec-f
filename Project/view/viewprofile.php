<html>
    <head>
        <title>
            view profile
        </title>
        <body>
        <table border="2">
        <tr>
            <td>Quick Eagle Currier service  <br>
            <table>
                <tr>
           <td> <a href="publichome.php" > Home </a> </td>|
       <td> <a href="login.php" > Login </a> </td>
       <td> <a href="profile.php" > profile </a> </td>
       <td> <a href="registration.php" > Registration </a></td>
        <td><a href="../controller/logout.php" > Logout </a>  </td>
                </tr> 
                <tr>
                    <td>
            <?php
           
$name=$_SESSION['username'];
$password=$_SESSION['password'];
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo $name; 
} else {
    echo "Form data not found.";
}
            ?>


        </td>
            </tr>
            </table>
            
        </body>
    </head>
</html>