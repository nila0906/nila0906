<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>FundBD | Registration Type</title>
  <link rel="shortcut icon" href="./assets/icon.png">
</head>
<body  background="20.jpg" link="#000" alink="#017bf5" vlink="#000">
     <img src="" height="" width="" align="">
    <!-- .................................Header Start..................... --> 
  
    
      <table align="center">
        <tr>
          <td>
            <img src="./assets/imgpsh_fullsize.png " alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <font face="Comic sans MS" size="5" color=" #8B008B">
            <a href="./index.php">Home</a>
            <a href="./loginType.php">Login</a>
            <a href="./regType.php">Registration</a>
            <a href="./aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    

      
        <form action="./regTypeCheck.php" method="post">
          <fieldset>
            <legend>Registration as</legend>
            <br>
            
            <input type="radio" name="regType" value="Employee">
            <label class="Employee">Employee</label>
            <input type="radio" name="regType" value="Donner">
            <label class="Donner">Donner</label>
            <input type="radio" name="regType" value="Applicant">
            <label class="Applicant">Applicant</label>
            <br>
            <br>
            <input type="submit" name="submit" value="Go">
          
          </fieldset>
        </form>
      
        <br><br>
   
    <?php
require('./footer.php');
?>
  

</body>
</html>