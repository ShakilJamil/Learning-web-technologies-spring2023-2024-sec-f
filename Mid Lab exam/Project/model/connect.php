<?php

if (empty(trim($_POST["name"]))) {
    header("Location:  ../view/userlist.php?error=name_empty");
    exit();
}else{
    $name=$_POST['name'];
}

// Validate email
if (empty(trim($_POST["email"]))) {
    header("Location:  ../view/userlist.php?error=email_empty");
    exit();
} elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
    header("Location:  ../view/userlist.php?error=email_invalid");
    exit();
} else {
    $email=$_POST['email']; 
}

// Validate number
if($_POST['number']="")
{
    header("Location:  ../view/userlist.php?error=number_empty");
    exit();
}else{
    $number=$_POST['number'];
}

// Validate username
if(empty($_POST['username']))
{
    header("Location:  ../view/userlist.php?error=username_empty");
    exit();
}else{
    $username=$_POST['username'];
}

// Validate password
if (strlen($_POST['password']) < 8) {
       
    header("Location: ../view/userlist.php?error=password_length");
    exit();
}elseif(empty($_POST['password']))
{
    header("Location:  ../view/userlist.php?error=password_empty");
    exit();
}else
{
    $password=$_POST['password'];  
}



if(empty($_POST['gender']))
{
    header("Location:  ../view/userlist.php?error=gender_empty");
    exit();
}else{
    $gender=$_POST['gender'];
}

if(empty($_POST['date']))
{
    header("Location:  ../view/userlist.php?error=date_empty");
    exit();
}else{
   $date=$_POST['date'];
}



    $src = $_FILES['myfile']['tmp_name'];
    $des= "upload/".$_FILES['myfile']['name'];

    if(empty($des))
    {
        header("Location:  ../view/userlist.php?error=file_empty");
    }
    if(move_uploaded_file($src, $des)){
       
    }else{
        echo " file upload Error";
    }
    $upload_dir = "upload/";
    $file_name = $_FILES["myfile"]["name"];
    $file_path = $upload_dir . $file_name;







$conn = mysqli_connect('localhost','root','','currier');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registation(name,email,number,username, password, gender,date,file) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissssb", $name, $email, $number, $username, $password, $gender,$date, $file_name);
		$execval = $stmt->execute();
		echo $execval;
		echo ". Registration successfully...";
		$stmt->close();
		$conn->close();
	}
/*$sql = "select * from users";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    echo "<br>";
}*/

?>