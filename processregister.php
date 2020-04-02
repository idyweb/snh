<?php
//collecting data
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];
//$designation= $_POST['designation'];
$department= $_POST['department'];

$errorArray = [];
//verifyong the data
if($first_name == ""){
    $errorArray = "first_name cannot be empty";
}
print_r($errorArray);

if($last_name == ""){
    $errorArray = "last_name cannot be empty";
}
print_r($errorArray);

if($email == ""){
    $errorArray = "email cannot be empty";
}
print_r($errorArray);

if($password == ""){
    $errorArray = "password cannot be empty";
}
print_r($errorArray);

if($gender == ""){
    $errorArray = "gender cannot be empty";
}
print_r($errorArray);

if($department == ""){
    $errorArray = "departmentcannot be empty";
}
print_r($errorArray);

//savung the data into db

//
print_r($_POST);
?>