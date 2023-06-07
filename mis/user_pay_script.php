<?php
    require 'connection.php';
    session_start();
    $name1= mysqli_real_escape_string($con,$_POST['name']);
    $address1=mysqli_real_escape_string($con,$_POST['address']);
    $contact_no=mysqli_real_escape_string($con,$_POST['contact_no']);
    $price = $_SESSION['price_total'] ;
    $user_contact_query="insert into payment(name,address,price,contact_no) values ('$name1','$address1','$price','$contact_no')";
    $user_contact_result=mysqli_query($con,$user_contact_query) or die(mysqli_error($con));
    header('location:success2.php');
    
?>