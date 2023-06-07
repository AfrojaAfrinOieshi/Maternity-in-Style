<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_SESSION['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logoproject2.png" />
        <title> Maternity In Style</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            .spacelogout{
            height: 260px;
            
             }
             .contact-in-input{
                height:60px;
                width:420px;
                border-style:double;
                border-radius:10px;
            }   
        </style>

        
           
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
                require 'connection.php';
            ?>
            <br>
           
            <div class="contact-in">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <center>
                            <h3 style="color:black;">Please give us the following informations for deliverying the products you ordered</h3>
                        </center>    
                    </div>
                    <div class="panel-body">
                        <form method="post" action="user_pay_script.php">
                        <center>
                            <input type="text"  name="name" placeholder="  Name" required="true" class="contact-in-input"><br>
                            <input style="margin-top:20px" type="text"  name="address" placeholder="  Address" required="true" class="contact-in-input"><br>
                            <input style="margin-top:20px" type="text"  name="contact_no" placeholder="  Contact No." required="true" class="contact-in-input"><br>
                            <input style="margin-top:20px;height:50px;width:180px;border-radius:25px;background-color:#F2DEDE;" type="submit" value="Confirm Order" class="contact-in-btn">
                        </center>
                        </form>
                    </div>   
                </div>
			</div>

            
            <?php
             $delete_query="delete from users_items ";
             mysqli_query($con,$delete_query) ;
             ?>
            <div class="spacelogout"></div>
            <?php
            require 'footer.php';
           ?>
        </div>
        
        
    </body>
</html>
