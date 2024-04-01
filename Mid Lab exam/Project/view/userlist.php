<html>
    <head>
        <title>FROM</title>
    </head>
    <body>
    <table  align="center"  border=1>
      
       
        <tr  >
            <td align="center"><h1 style="color:red;">Quick Egale Currier Service<h1></td><br>
</tr>
<tr>
            <td align="left"><a href="publichome.php" > Home </a> |
        <a href="login.php" > Login </a>
      
     </td>
</tr>


<tr><td>
<?php

 ?>
 <br>

 <form method="post" action="../model/connect.php" enctype="multipart/form-data">
            Name: 
               <input type="text" name="name" value="" id="password"/><br>
          <br>
         
            
            Email:
                <input type="email" name="email" value="" id="email" /><br>
            <br>

            Number:
                <input type="number" class="form-control"  id="number" name="number" /><br>
            <br>
          
        
            username: 
            <input type="text" name="username" value="" id="username"/><br>
          <br>
            password: 
            <input type="password" name="password" value="" id="password" /><br>
            <br>
           
           
            <fieldset>
            <legend>Gender</legend>
           
            <input type="radio" name="gender" value="m"/> Male
            <input type="radio" name="gender" value="f"/> Female
            <input type="radio" name="gender" value="o"/> Other <br/>
       <br>
        </fieldset>
        <fieldset>
            <legend>Date of Birth</legend>
            <input type="date" name="date" value=""/>
           
            <br>
        </fieldset><br>
       
        Image: <input type="file" name="myfile" value="" /> <br>
       
        
        
        
        <hr width="152px"  align="left">
        
        <input type="submit" name="submit" value="submit" /> 
       
        
        

          </form>    
</td>
</tr>
    </table>
    </body>
</html>