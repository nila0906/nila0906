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
    <!-- .................................Header Start..................... --> 
  <form action="" onsubmit="return  donationGoal()" >
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
  <form method="post" action="../controller/applicantDonnationGoal.php" >
    <fieldset>
    
        <legend><b><h3>Applicant Set Donation Goal</h3></b></legend><br>
    
  
        <table align="center"width="500">
          <tr>
          <td><fieldset>
    
            <legend><b>Choose Donation Goal</b></legend>
        
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="dgoal" value="10000">
            <label class="10000">10000</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="dgoal" value="50000">
            <label class="50000">50000</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="dgoal" value="100000">
            <label class="100000">100000</label>
        
            </fieldset></td>
                </tr>
        </table> 
        <br><br>
        <hr><br>
        <table align="center">
          <tr>
            <td><input type="submit" name="submit" id="submit" value="Submit">
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
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  </form>


  <script>
    function get(id)
       {
           return document.getElementById(id);
       }
   
       function donationGoal()
       {
   
         var dgoal = document.getElementsByName("dgoal");
   
  
         var validate = true;
         
   
         if (!(dgoal[0].checked || dgoal[1].checked || dgoal[2].checked)) 
         {
            // get("errdgoal").innerHTML="Please Select Your donation goal";
             alert("Please Select Your donation goal");
             validate = false;
         }
        
    
         return validate;
       }
   
   
   </script>


</body>
</html>