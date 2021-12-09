<?php


session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

$name = $_POST [ 'name' ];
$email =$_POST [ 'email' ];
$userName =$_POST [ 'uname' ];
$password =$_POST [ 'pword' ];
$confirmPassword = $_POST [ 'conpword' ];
$gender = $_POST ['gender'];
$day = $_POST [ 'date'] ;
$month = $_POST [ 'month'];
$year = $_POST [ 'year' ] ;
$dateOfBirth = $day."/".$month."/".$year;




if ( $name == "" || $email == "" ||  $userName == "" || $password == "" || $confirmPassword == "" || $gender == ""|| $day == "" || $month == "" || $year == "" ) {
echo "Filled all the file... ";
}
elseif ( $password != $confirmPassword) {
echo "Password didn't match with confirm Password ";
}
else{
$applicantData = [
'name'=>$name,
'email'=> $email,
'userName'=>$userName,
'password'=>$password,
'gender'=> $gender,
'dateOfBarth'=> $dateOfBirth,


];
$applicantDataJson= json_encode( $applicantData );
$jsonFile= fopen( "../Model/applicantData.json", "w" );
fwrite($jsonFile , $applicantDataJson);
fclose($jsonFile);
header('location: ../View/applicantLogin.php');

}
}
?>
