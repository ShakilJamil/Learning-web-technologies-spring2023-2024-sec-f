<?php
    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $des= "upload/".$_FILES['myfile']['name'];
  /*  if(empty($_FILES))
    {
        exit('$_FILES is empty- ')
    }*/

    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "Error";
    }
?>