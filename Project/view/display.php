<?php
session_start();

// Check if form inputs are set in session
/*if (isset($_SESSION['form_inputs'])) {
    // Retrieve and display form inputs
    echo "<h2>Form Inputs:</h2>";
    echo "<ul>";

    foreach ($_SESSION['form_inputs'] as $input) {
        echo "<li>$input</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No form inputs submitted yet.</p>";
}*/
$con = mysqli_connect('localhost', 'root', '', 'currier');
$sql = "select * from registation";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    echo "<br>";
}

?>
