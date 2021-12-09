<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Applicant Login</title>
   <link rel="stylesheet" type="text/css" href="style.css">
  <style type ="text/css">
   body {
    background-color:lightblue;
   } 

  </style>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<link rel="stylesheet" href"style.css">
<body >


      <table align="center">
        <tr>
          <td>
            <img src="../assets/imgpsh_fullsize.png" " alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <font face="Comic sans MS" size="3" color=" #FF00FF">
            <a href="../index.php">Home</a>
            <a href="../loginType.php">Login</a>
            <a href="../regType.php">Registration</a>
            <a href="../aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    
      <form method="post" action="../controller/applicantLoginCheck.php"> 
        <fieldset>
          <legend>Applicant Login</legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="uNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>	
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href="./adminForgatePass.html"> Forget password?</a>
                </td>
                
              </tr>
            
                
            </table>  
              
            
        </fieldset>
      </form>
      
    <!-- js code goes here -->
    <script>
      function uNameValidation() {
        var username, msg;
      
       
        username = document.getElementById("userName").value;
        
        
        if (username=="") {
          msg = "Empty field is not appected";
        } 
        else{
          if (username.length<2 ) {
            msg = "Need at least 2 characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("userNameErorr").innerHTML = msg;
      }
      function passValidation() {
        var password, msg;
      
       
        password = document.getElementById("password").value;
        
        
        if (password=="") {
          msg = "Empty field is not appected";
        } 
        else{
          if (password.length<8 ) {
            msg = "Need at least 8 characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("passwordErorr").innerHTML = msg;
      }
      
      
      </script>
 <?php
require('../footer.php');
?>



    
</body>
</html>