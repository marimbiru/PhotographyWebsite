<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/05/2018
 * Time: 12:54
 */

$connection=mysqli_connect("localhost", "root","","photography");
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$insert="INSERT INTO `contactus`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
mysqli_query($connection,$insert);
header("Location: ../contact.html");
die();
?>
