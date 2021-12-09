<?php
    session_start();
    $userName = $_SESSION['userName'];
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Profile</title>
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
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
             <font face="Comic sans MS" size="3" color=" #FF00FF">
            <a href="./applicantDashBoard.php">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
            <a href="../logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="800">
        <tr>

          <td>
            <fieldset>
              <legend><b>Applicant Profile</b></legend>
              <img src="../assets/user.png" alt="" width="100" height="100"><br>
              <a href="./applicantChangePic.php">Change</a>
              <table>
                <tr>
                  <td>Name &nbsp;&nbsp;</td>
               <td>: &nbsp; <?php echo "name";?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Email &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo "nilamehjabin2@gmail.com";?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Occupation &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo "student";?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Gender &nbsp;&nbsp;</td>
                   <td>:  &nbsp;<?php echo "Female";?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Date of Birth &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo "09/10/1999";?></td>

                </tr>
              </table>
              <hr>
              <a href="./applicantUpdateProfile.php">Edit Profile</a><br><br>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    
    <?php

require('../footer.php');

?>
</body>
</html>


