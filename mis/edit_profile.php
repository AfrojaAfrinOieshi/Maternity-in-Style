<?php
    require 'connection.php';
    session_start();
   
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
               
                        
                require 'connection.php';
                if(!isset($_SESSION['email'])){
                    header('location: login.php');
                }
                $user_id=$_SESSION['id'];
                $query="select * from users where id='$user_id'";
                $query_run = mysqli_query($con,$query) or die(mysqli_error($con));
                $check_about_us = mysqli_num_rows($query_run)>0;
                if($check_about_us){

                    while ($row = mysqli_fetch_array($query_run)) {
                
           ?>
           
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-warning">
                            <div class="panel-heading">
                                <center>
                                    <h3 style="color:black;"><b>UPDATE</b></h3>
                                </center>    
                            </div>
                            <div class="panel-body">
                            <form method="post" action="edit_profile_update.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true" value="<?php echo $row['name']; ?>" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" value="<?php echo $row['email']; ?>" >
                            </div> 
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" value="<?php echo $row['contact']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true" value="<?php echo $row['city']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true" value="<?php echo $row['address']; ?>">
                            </div>
                            <div class="form-group">
                                <center>
                                <input style="width:180px;" type="submit" class="btn btn-success" value="Update Now">
                                </center>
                            </div>
                        </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <?php
              }
            }else{
              echo "not found";
            }
           ?>
            <br><br><br><br><br><br>
            <?php
            require 'footer.php';
           ?>

        
    </body>
</html>
