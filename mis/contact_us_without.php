<?php
    require 'connection.php';
    session_start();
    $name1= mysqli_real_escape_string($con,$_POST['name']);
    $email1=mysqli_real_escape_string($con,$_POST['email']);
    $subject1 = mysqli_real_escape_string($con,$_POST['subject']);
    $message1 =  mysqli_real_escape_string($con,$_POST['message']);
    $user_contact_query="insert into contact(name,email,subject,message) values ('$name1','$email1','$subject1','$message1')";
    $user_contact_result=mysqli_query($con,$user_contact_query) or die(mysqli_error($con));
    header('location:map_without_login.php');
    
?>