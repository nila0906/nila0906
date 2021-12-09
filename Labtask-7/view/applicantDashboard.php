<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type ="text/css">
   body {
    background-color:lightblue;
   } 

  </style>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body >

  <fieldset>
    
      <table align="center">
        <tr>
          <td>
            <img src="../assets/imgpsh_fullsize.png"" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
             <font face="Comic sans MS" size="3" color=" #FF00FF">
            <a herf="../index.php"> Home </a>&nbsp;
            <a href="./applicantdashBoard.php">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
           <a href="../aboutUs.php">About Us</a>&nbsp;
          </td>
        </tr>
      
       <table align="right">
          <tr>
              <td>
                <a href="../logout.php">Logout</a>
              </td>
          </tr>
        </table>
        <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Applicant Account</h3>
            <hr>
            <ul>
              <li><a href="./applicantDashboard.php">Dashboard</a></li>
              <li><a href="./applicantProfile.php">View Profile</a></li>
              <li><a href="./applicantUpdateProfile.php">Edit Profile</a></li>
              <li><a href="./applicantChangePic.php">Change Profile Picture</a></li>
              <li><a href="./applicantChangePassword.php">Change Password</a></li>
              <li><a href="./applicantDeleteAccount.php">Delete Account</a></li>
              <li><a href="./applicantCauseForDonation.php">Donation Reason</a></li>
              <li><a href="./applicantDonationDetails.php">Donation Details</a></li>
              <li><a href="./applicantDonationGoal.php">Set Donation Goal</a></li>
              <li><a href="./applicantEditPost.php">Edit Post</a></li>
              <li><a href="./applicantGoalCompleteNotice.php">Goal Complete Notice</a></li>
              <li><a href="./applicantNoticeBoard.php">Notice Board</a></li>
              <li><a href="./applicantWithdrawMoney.html">Withdraw Money</a></li>
              <li><a href="./sendMessageToAdmin.php">Massage To Admin</a></li>
            </ul>
          </td>
          <td>
            <fieldset>
              <legend><b>Profile</b></legend>
              <img src="../assets/user.png" alt="" width="100" height="100"><br>
              <a href="./applicantChangePic.php">Change</a><br>
              <table>
                <tr>
                  <td>Name &nbsp;&nbsp;</td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Email &nbsp;&nbsp;</td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Gender &nbsp;&nbsp;</td>
                  
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Date of Birth &nbsp;&nbsp;</td>
                  
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
