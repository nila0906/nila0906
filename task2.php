<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

  <?php
    
    $nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";
    $name = $email = $dateofbirth = $gender = $degree = $bloodgroup =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        $name="";
      }
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $email ="";
      }
      }
      if (empty($_POST["dateofbirth"])) {
        $dateofbirthErr = "Date of Birth is required";
      } else {
        $dateofbirth = test_input($_POST["dateofbirth"]);
      }
      
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if (empty($_POST["degree"])) {
        $degreeErr = "Minimum two options have to be required";
      } else {
        $degree = test_input($_POST["degree"]);
        }

      if (empty($_POST["bloodgroup"])) {
        $bloodgroupErr = "Blood Group is required";
      } else {
        $bloodgroup = test_input($_POST["bloodgroup"]);
      }
      
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

  ?>


    
    
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

     <!**********Name************>

    <fieldset style="width:20%">
      <legend>Name</legend>
      <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span> 
    </fieldset>

    <!**********Email***********>

    <fieldset style="width:20%">
      <legend>Email</legend>
      E-mail: <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
    </fieldset>

    <!***********Date of birth********>

    <fieldset style="width:20%">
      <legend>Date Of Birth</legend>
      <select name="day">
        <option>dd</option> 
        <?php
          for ($day=1; $day <=31 ; $day++) 
            echo "<option value = '".$day."'>".$day."</option>";
           
         ?>
      </select>
      <select name="month">
        <option>mm</option> 
        <?php
          for ($month=1; $month <=12 ; $month++) 
            echo "<option value = '".$month."'>".$month."</option>";
           
         ?>
      </select>
      <select name="year">
        <option>yyyy</option> 
        <?php

          $y = date("Y",strtotime("+8 HOURS"));
          for ($year=1953; $y >= $year ; $y--) {
            echo "<option value = '".$y."'>".$y."</option>";
          }
           
         ?>
      </select>

      <span class="error"><?php echo $dateofbirthErr;?></span>
    </fieldset>

    <!***********Gender*****************>

    <fieldset style="width:20%">
      <legend>Gender</legend>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
      <span class="error">* <?php echo $genderErr;?></span>
    </fieldset>

    <!***********Degree*********>

    <fieldset style="width:20%">
      <legend>Degree</legend>
      <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
      <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
      <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
      <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
      <span class="error">* <?php echo $degreeErr;?></span>
    </fieldset>
     
     <!*********Blood group***************>

    <fieldset style="width:20%">
      <legend>Blood Group</legend>
            <select name="bloodgroup"> 
        <option value=""></option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
      </select>
      <span class="error">* <?php echo $bloodgroupErr;?></span>
      <br> 
      <br>
      
      <input type="submit" name="submit" value="Submit">
    </fieldset>
      
      
    </form>


  <?php
    echo "<h2>Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $dateofbirth;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $degree;
    echo "<br>";
    echo $bloodgroup;

  ?>


</body>
</html>