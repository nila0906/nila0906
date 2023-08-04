<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FundBD |Crowdfunding</title>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
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
            <a href="./applicantdashBoard.php">Dashboard</a>&nbsp;
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
      <form method="post" action="../controller/applicantDeleteAccount.php"  >
        <fieldset>
        
            <legend><b><h3>Applicant Account Deactivation</h3></b></legend><br>
        
            <table align="center">
              
              <tr>
                <td>Current Password </td>
                <td> :<input type="password" id="currentPass" name="currentPass" onkeyup="validation()"/> <br/></td> 
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td id="matching" align="center"></td>
              </tr>
              </table>
            <hr>
            <table align="center">
              <tr>
                <td><input type="submit" name="submit" id="submit" value="Delete">
                  <input type="reset" name="reset" id="reset" value="Cancel">
                </td>
              </tr>
    
            </table> 
          
        </fieldset>
        </form>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
  <!-- .................................Footer Close..................... -->
</form>
  
<script>
    function validation() {
        var currentPass, msg;
      
       
        currentPass = document.getElementById("currentPass").value;
        
        if (currentPass.length < 8) {
          msg = "Password looks Too short";
        } 
        else{
          msg = "Good"   
        }
        

        document.getElementById("strnth").innerHTML = msg;
      }
  </script>

</body>
</html>