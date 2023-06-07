<?php
    require 'connection.php';
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    } 
    $id=$_SESSION['id'];
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $update_query="update users set name='$name',email='$email',contact='$contact',city='$city',address='$address' where id='$id'";
    $update_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
    
    header('location:index.php');
    
?>