<?php
$con = mysqli_connect("localhost","root","","qwerty") or die(mysqli_connect_error($con));
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
$user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name','$email','$password', '$contact', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User Successfully Inserted";
//session_start();
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
if((isset($_SESSION['id'])))
{
    //echo ' session start';
    header('location:products.php');
}
?>