<?php
$con = mysqli_connect("localhost","root","","qwerty") or die(mysqli_connect_error($con));
$email = $_POST['email'];
$password = $_POST['password'];
$select_query = "SELECT password FROM users WHERE email='".$email."'";
$select_query_result = mysqli_query($con,$select_query)or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)!=0)
{
    echo 'User verified';
    session_start();
    $_SESSION['email'] = $email;
    header('location:products.php');
}
 else
 {
     echo "User not registered. Sign up and Enjoy Shopping... ";
 }
?>
