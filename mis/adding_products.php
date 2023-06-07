<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $price=mysqli_real_escape_string($con,$_POST['price']);
    $image = mysqli_real_escape_string($con,$_POST['image']);
    $sub =  mysqli_real_escape_string($con,$_POST['sub']);
    $type =  mysqli_real_escape_string($con,$_POST['type']);
    $add_query="insert into items(name,price,image,sub,type) values ('$name','$price','$image','$sub','$type')";
    $add_result=mysqli_query($con,$add_query) or die(mysqli_error($con));
    header('location:add_delete_product.php');
    
?>