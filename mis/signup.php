<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products2.php');
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
        
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-warning">
                            <div class="panel-heading">
                                <center>
                                    <h3 style="color:black;"><b>SIGN UP</b></h3>
                                </center>    
                            </div>
                            <div class="panel-body">
                            <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <center>
                                <input style="width:180px;" type="submit" class="btn btn-success" value="Sign Up">
                                </center>
                            </div>
                        </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <?php
            require 'footer.php';
           ?>

        </div>
        
    </body>
</html>
