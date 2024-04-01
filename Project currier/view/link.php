<?php

if($_REQUEST['edit']){
header("Location: ../controller/editprofile.php");
}

    if($_REQUEST['delete']){
        header("Location: ../controller/deleteprofile.php");
        }
        if($_REQUEST['view']){
            header("Location: display.php");
            }

exit();
?>