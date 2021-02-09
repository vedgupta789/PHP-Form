<?php
require 'common.php';
$email = $_POST['email'];
$pass = $_POST['password_ved'];
$phone = $_POST['phone'];
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
session_start();
if(!preg_match($regex_email, $email)){
    $_SESSION['err'] = "Enter valid Email.";
    header('location:signup.php');
}
elseif(strlen($pass) < 6)
{  $_SESSION['err'] = "Password length should 6 or more.";
   header('location:signup.php');
}
elseif(strlen($phone) != 10){
    $_SESSION['err'] = " Enter 10 digit valid Phone number.";
     header('location:signup.php');
}else{
    $password = hash('sha512', $_POST['password_ved']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = mysqli_real_escape_string($con, $email);
    $password = md5(mysqli_real_escape_string($con, $password));
    $first_name = mysqli_real_escape_string($con, $first_name);
    $last_name = mysqli_real_escape_string($con, $last_name);
    $phone = mysqli_real_escape_string($con, $phone);
    $select_query = "SELECT id FROM kohlimediasignup WHERE email = '$email'";
    $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
    if(!$total_rows_fetched == 0){
        header('location: signup.php?err=Already_registered');
    }
    else{
    $user_registration_query = "INSERT INTO kohlimediasignup (email, password, firstname, lastname, phone) VALUES ('$email', '$password'
                , '$first_name', '$last_name', '$phone')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    header('location:users.php');
    }
}
?>
