
<?php

   /* if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }*/

    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }


?>

<html>
    <head>
        <title>FROM</title>
    </head>
    <body>
    <table border=1>
        <tr>
            <td>Quick Egale currier service <br>
            <table>
                <tr>
           <td> <a href="publichome.php" > Home </a> </td>
       
          <td> <a href="notification.php" > .Notifications </a></td><br>
    
        <td><a href="../controller/logout.php" > Logout </a>  </td>
                </tr> </table> </td>
</tr>
<tr style="height:100px">
<td style="width:10%">Account<br>
<hr width="15px"  align="left">

<a href="profile.php" > .profile </a><br>
<a href="massage.php" > .send Massage </a><br>
<a href="payment.php">  .Payment</a><br>

</td>
<td style="height:10px">
    WElcome bob
            

</td>
</tr>
    </table>
    </body>
</html>