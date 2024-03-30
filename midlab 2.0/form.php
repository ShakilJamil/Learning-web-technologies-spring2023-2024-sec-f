
<html lang="en">
<head>
    
    <title>Email Registration Form</title>
</head>
<body>
    <h2>Email Registration Form</h2>
    <form action="validation.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="firstname" ><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="lastname" ><br><br>

        <label for="dob">Date of Birth:</label>
        <select id="day">
    <option value="">Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    
</select>

<select id="month">
    <option value="">Month</option>
    <option value="January">January</option>
    <option value="February">February</option>
    
</select>

<select id="year">
    <option value="">Year</option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
   
</select>
      <br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" >
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other" >
        <label for="other">Other</label><br><br>

        

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirmpassword" ><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
