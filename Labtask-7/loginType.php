<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Login Type</title>
  <link rel="shortcut icon" href="./assets/icon.png">
   <link rel="stylesheet" type="text/css" href="style.css">
  <style type ="text/css">
  body {
    background-color:lightcyan;
   } 

  </style>

</head>
<body background="20.jpg" link="#000" alink="#017bf5" vlink="#191970">
     <img src="" align="center"> 
      <table align="center">
        <tr>
          <td>
            <img src="./assets/imgpsh_fullsize.png"" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <font face="Comic sans MS" size="5" color="#000000 ">
            <a href="./index.php>">Home</a>
            <a href="./loginType.php">Login</a>
            <a href="./regType.php">Registration</a>
            <a href="./aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    
  
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    
<fieldset>      
      
        <form action="./loginTypeCheck.php" method="post">
        
          
            <legend>Login as</legend>
            <br>
            <input type="radio" name="loginType"value="Admin" checked>
            <label class="Admin">Admin</label>
            <input type="radio" name="loginType" value="Employee">
            <label class="Employee">Employee</label>
            <input type="radio" name="loginType" value="Donner">
            <label class="Donner">Donner</label>
            <input type="radio" name="loginType" value="Applicant">
            <label class="Applicant">Applicant</label>
            <br>
            <br>
            <input type="submit" name="submit" value="Go">
          
        </form>
      
        <br><br>
      </fieldset>
    
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
   
      <p align="center">copyright	&#169;2021</p>
    
  <!-- .................................Footer Close..................... -->

</body>
</html>