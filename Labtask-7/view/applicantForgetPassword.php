<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FundBD |Crowdfunding</title>
   <link rel="stylesheet" type="text/css" href="style.css">
  <style type ="text/css">
   body {
    background-color:lightblue;
   } 

  </style>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  <form action="" onsubmit="return forgotPassword()">
  <fieldset>
    <table align="center">
      <tr>
        <td>
          <img src="../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">          </td>
        
      </tr>
    </table>
    <table align="center">
      <tr>
        <td>
          <font face="Comic sans MS" size="3" color=" #FF00FF">
          <a href="./index.php">Home</a>
          <a href="./loginType.php">Login</a>
          <a href="./regType.php">Registration</a>
          <a href="./aboutUS.php">About Us</a>
        </td>
      </tr>
    </table>
  </fieldset>
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="../controller/applicantForgetPassword.php" >
        <fieldset>
        
            <legend><b><h3>Applicant Forgot Password</h3></b></legend><br>
        
            <table align="center">


              <tr>
                <td>Enter the Last password you remember :</td>
                <td><input type="password" id="lstpword" name="lstpword" >
                  &nbsp;
                  <span id="errlstpword" style="color:red"></span> <!--For JS error message-->
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" id="email" name="email" >
                  &nbsp;
                  <span id="erremail" style="color:red"></span> <!--For JS error message-->
                </td>
            </tr>
            
            </table>

            <hr><br>
           
            <table align="center">
              <tr>
                <td><input type="submit" name="submit" id="submit" value="Update">
                  <input type="reset" name="reset" id="reset" value="Reset">
                </td>
              </tr>
    
            </table> 
        </fieldset>
        </form>
    </fieldset>
    
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright &#169;2021</p>
    </fieldset>
  
  <!-- .................................Footer Close..................... -->
</form>


  <script>
    function get(id)
    {
        return document.getElementById(id);
    }
  
    function forgotPassword()
    {
        var lstpword = get("lstpword").value;
         var email = get("email").value;
         
      
        var validate = true;
        
  
        if(lstpword=="")
        {
            validate = false;
           get("errlstpword").innerHTML="Please Enter the Last password you remember";
            get("lstpword").focus();
        }
        else
        {
           get("errlstpword").innerHTML="";
        }
  
      
        if(email=="")
        {
            validate = false;
           get("erremail").innerHTML="Please Enter  Email";
            get("email").focus();
        }
        else
        {
           get("erremail").innerHTML="";
        }

  
        return validate;
  
    }
  
  
  </script>
  

</body>
</html>