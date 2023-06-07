<?php
    require 'connection.php';
    
    $email=mysqli_real_escape_string($con,$_POST['email']);
    
    $password=mysqli_real_escape_string($con,$_POST['password']);
    
    $query="select id,email from admin where email='$email' and password='$password'";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        
        ?>
        <script>
            window.alert("Wrong email address or password");
        </script>
        <meta http-equiv="refresh" content="1;url=admin_login.php" />
        <?php
        
    }else{
       
       
        header('location: add_delete_product.php');
    }
    
 ?>