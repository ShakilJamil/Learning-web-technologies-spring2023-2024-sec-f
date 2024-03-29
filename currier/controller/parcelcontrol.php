<?php
session_start();


function addForm($name, $email) {
    $_SESSION['forms'][] = array('name' => $name, 'email' => $email, 'number'=>$number);
}


function deleteForm($index) {
    if (isset($_SESSION['forms'][$index])) {
        unset($_SESSION['forms'][$index]);
        $_SESSION['forms'] = array_values($_SESSION['forms']); // Re-index the array
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        addForm($name, $email);
    } elseif (isset($_POST['delete'])) {
        $index = $_POST['index'];
        deleteForm($index);
    }
}

header('Location: index.php'); 
?>