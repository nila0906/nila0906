<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['loginType'];
    
    if($type == "Admin"){
      
      header('location: ./View/adminLogin.php');
     
    }
    if($type == "Employee"){
      
      header('location: ./View/employeeLogin.php');
     
    }
    if($type == "Donner"){
      
      header('location: ./View/donnerLogin.php');
     
    }
    if($type == "Applicant"){
      
      header('location: ./View/applicantLogin.php');
     
    }
    

    
  }


?>