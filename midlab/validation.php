<?php

$first=$_REQUEST['firstname'];
$char = substr($first, 0, 1);


if($_REQUEST['firstname']=="")
{
    echo "empty name";
}
else if($char!='a'||'b'||'c'||'d'||'e'||'f'||'g'||'A'||'B'||'C'||'D'||'E'||'F'||'G'||'R'||'r'||'k'||'K'||'N'||'n'||'M')
{
    echo"invalid name";
}
else{
    $firstname=$_REQUEST['firstname'];
}


if($_REQUEST['lastname']=="")
{
    echo "empty name";
}
else{
    $firstname=$_REQUEST['firstname'];
}



if($_REQUEST['email']=="")
{
    echo "Email cannot be empty.<br>";
        } elseif (strpos($_REQUEST['email'], "@") === false || strpos($_REQUEST['email'], ".") === false) {
            echo "Invalid email format.<br>";
        } else {
           $email=$_REQUEST['email'];
        }


        if($_REQUEST['password']=="" && $_REQUEST['confirmpassword']=="")
        {
            echo "empty";
        }
        elseif($_REQUEST['password']!= $_REQUEST['confirmpassword'])
        {
            echo "not match";
        }
        else{
            $password=$_REQUEST['password'];
$confirmpassword=$_REQUEST['confirmpassword'];
        }

?>