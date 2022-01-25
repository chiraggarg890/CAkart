<?php
session_start();
$username ="";
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'register') or die("could not connect to database");
//REGISTER USER
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


if(empty($username)){array_push($errors,"Username is  required");};
if(empty($email)){array_push($errors,"eamil is  required");};
if(empty($password_1)){array_push($errors,"password is  required");};
if($password_1 != $password_2){array_push($errors,"The two passwords do not match");};

//check db for existing user with same username
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$username_check = mysqli_fetch_assoc($results);
if($username_check){
    if($username_check['username'] === $username){array_push($errors,"Username already exists");}
    if($username_check['email'] === $email){array_push($errors,"email already exists");}
}
//Register user if no error
if(count($errors)==0){
    $password = md5($password_1);
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in";

    header('location : indexy.php');ōō


}











?>