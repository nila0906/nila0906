<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['regType'];
    
    
    if($type == "Employee"){
      
      header('location: ../View/employeeRegistration.php');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/donnerRegistration.php');
     
    }
    if($type == "Applicant"){
      
      header('location: ./View/applicantRegistration.php');
     
    }
    

    
  }


?>