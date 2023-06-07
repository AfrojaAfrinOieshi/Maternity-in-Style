<?php
    require 'connection.php';
    session_start();
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $update_query="delete from items where name='$name'";
    $update_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
    header('location:add_delete_product.php');
?>    