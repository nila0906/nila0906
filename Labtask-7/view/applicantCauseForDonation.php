<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>FundBD |Couse_For_Donation</title>
   <link rel="stylesheet" type="text/css" href="style.css">
  <style type ="text/css">
   body {
    background-color:lightblue;
   } 

  </style>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body>
    <!-- .................................Header Start..................... --> 
  <form action="" onsubmit="return CauseForDonation()">
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
            <a href="./applicantdashBoard.php">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
            <a href="../logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="../controller/aplicantCauseForDonation.php" >
    <fieldset>
    
        <legend><b><h3>Applicant Donation Reason</h3></b></legend><br>
    
  
        <table align="center">
          <td>Reason for Donation :</td>
                <td><input type="text" id="rdonation" name="rdonation" >
                  &nbsp;
                  <span id="errrdonation" style="color:red"></span> <!--For JS error message-->
                </td>
        </table> 
        <hr><br>
        <table align="center">
          <tr>
            <td><input type="submit" name="submit" id="submit" value="Post">
              <input type="reset" name="reset" id="reset" value="Clear">
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
  function get(id)
  {
      return document.getElementById(id);
  }
  function CauseForDonation()
  {
      var rdonation = get("rdonation").value;
       
      var validate = true;
      if(rdonation=="")
      {
          validate = false;
         get("errrdonation").innerHTML="Please Enter Reason for Donation";
          get("rdonation").focus();
      }
      else
      {
          get("errrdonation").innerHTML="";
      }

      return validate;

  }


</script>


</body>
</html>