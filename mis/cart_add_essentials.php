<?php
    require 'connection.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    $add_to_cart_query1="insert into users_queue(user_id,item_id,status) SELECT user_id,item_id,status FROM users_items";
    $add_to_cart_result1=mysqli_query($con,$add_to_cart_query1) or die(mysqli_error($con));
    header('location: essentials.php');
?>