
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Change Picture</title>
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
  <form action=""  onsubmit="return ChangePic()">
    <fieldset>
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
      
        <form method="POST" action="">
          <fieldset >
            <legend> <b><h3>Applicant Change Profile Picture </h3></b></legend>
              <table>
                <tr>
                  <td>
                    <input type="file" id="img" name="img" accept="image/*" >
                    &nbsp;
                  <span id="errimg" style="color:red"></span> <!--For JS error message-->
                  </td>
                  <td>
                    <input type="submit" value="Upload" name="submit">
                  </td>
                </tr>

              </table>

            
          </fieldset>
        </form>
     
        
      
       
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright &#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
  </form>

<script>

function get(id)
  {
      return document.getElementById(id);
  }
  function ChangePic()
  {
      var img = get("img").value;
     
    
      var validate = true;
      if(img=="")
      {
          validate = false;
         get("errimg").innerHTML="Please Select Picture";
          get("img").focus();
      }
      else
      {
          get("errimg").innerHTML="";
      }

      return validate;

  }


</script>
<?php
require('../footer.php');
?>

  

</body>
</html>