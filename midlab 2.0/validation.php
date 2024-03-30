<?php

$first=$_REQUEST['firstname'];
for($i=0;$i<1;$i++){
$char = $first[$i];
}
$flag=0;


if($_REQUEST['firstname']=="")
{
    echo "empty name";
}
else if($char=='a'||'b'||'c'||'d'||'e'||'f'||'g'||'A'||'B'||'C'||'D'||'E'||'F'||'G'||'R'||'r'||'k'||'K'||'N'||'n'||'M')
{
    $firstname=$_REQUEST['firstname'];
}

else{
    echo"invalid name";
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
        elseif(strlen($_REQUEST['password'])<8)
        {
            echo "enter 8 charecter";
        }
        else{
            $password=$_REQUEST['password'];
$confirmpassword=$_REQUEST['confirmpassword'];
     
        }
if($firstname!="")
{
    echo"success";
}
else
{
    echo "failed";
}
        
    

?>
