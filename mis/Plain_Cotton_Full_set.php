<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logoproject2.png" />
        <title>Maternity In Style</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Bonheur+Royale&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Birthstone&display=swap');
        </style>
           
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                <center>
                    <h1 style="font-family: 'Bonheur Royale', cursive;">Welcome To Maternity In Style</h1> 
                    <p style="font-family: 'Birthstone', cursive;">We have everything you need to make you and your baby's life comfortable.</p>
                </center>
                </div>
            </div>
            <div class="container">
               
                <div class="row">
                  
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="Plain_Cotton_Full_set.php">
                            <img src="img/mom3.jpg" alt="mom dress 2">
                            </a>
                            <br><br>
                            <center>
                                <div class="caption">
                                    <h3>Plain Cotton Kurti Full Set</h3>
                                    <p>Price: Tk. 1600.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_clothes.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-6">
                        <div class="thumbnail">
                           
                            <br><br>
                            <center>
                                <div class="caption">
                                    <h3>Plain Cotton Kurti Full Set</h3>
                                    <p>100% Cotton
                                        3 pieces
                                       Pocket on Right Side
                                       Button closure
                                       Long cotton tunic top blouse in plain solid colors. Comfortable soft material.
                                       Chinese collar with button down.
                                       It contain only 1 top, No Pants …. Top Length - 45-46 inches: Roll-up 3/4 Sleeves
                                       You can wear this women casual tunic top at home, at work or at party, also it is suitable for casual shopping or walk.
                                      Size Chart Guide* The size of this tunic is ready garment size at chest. For choose the size which is 3-4 inches bigger than your body measurements at chest. For example if your chest body measurements is 36 inches, then you can go for the Size-40/Medium</P>
                                      <p style="font-size: 15px;color:green;" >
                                        Origin: Bangladesh
                                        </p>
                                    <p style="font-size: 20px;color:blue;">Price: Tk. 1600.00</p>
                                   
                                </div>
                            </center>
                        </div>
                    </div>
                   
                </div>
                
            </div>
            <br><br><br><br><br><br><br><br>
            <?php
            require 'footer.php';
           ?>
        </div>
        
    </body>
</html>
