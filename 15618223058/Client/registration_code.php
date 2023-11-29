<?php

$fname = $_GET['first_name'];
$mname = $_GET['middle_name'];
$lname = $_GET['last_name'];
$email = $_GET['email'];
$mobile = $_GET['mobile_number'];
$password = $_GET['password'];
$city = $_GET['city'];
$state = $_GET['state'];
$country = $_GET['country'];
$education = $_GET['education'];
$gender = $_GET['gender'];

// echo $fname.'<br>';
// echo $mname.'<br>';
// echo $lname.'<br>';
// echo $email.'<br>';
// echo $mobile.'<br>';
// echo $password.'<br>';
// echo $city.'<br>';
// echo $state.'<br>';
// echo $country.'<br>';
// echo $education;

$con = mysqli_connect('localhost','root','','mca');
$query = "INSERT INTO `registration`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Mobile_no`, `Password`, `City`, `State`, `Country`, `Edu_qualification`s)
 VALUES ('$fname','$mname','$lname','$email','$mobile','$password','$city','$state','$country','$education')";
$execute_query = mysqli_query($con, $query);







?>