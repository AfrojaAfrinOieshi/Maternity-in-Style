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
                            <a href="Baby_Frock_cotton.php">
                                <img src="img/baby.webp" alt="baby dress">
                            </a>
                            <center>
                                <br>
                                <div class="caption">
                                    <h3>Baby Frock cotton</h3>
                                    <p>Price: Tk. 210.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                   
               

                <div class="col-md-9 col-sm-4">
                        <div class="thumbnail">
                          
                            <center>
                                <br>
                                <div class="caption">
                                    <h3>Baby Frock cotton</h3>
                                   <p>Being a noteworthy enterprise of this industry, we are offering a wide spectrum of Baby Cotton Frock.</p>
                                   </center>
                                    <p style="margin-left:108px"> Features:</P>
                                   <p style="margin-left:108px"> -100% cotton,</p>
                                   <p style="margin-left:108px"> - Elegant look,</p>
                                    <p style="margin-left:108px">- Prefect design,</p>
                                    <p style="margin-left:108px">- Fade resistance</p>
                                   <center>
                                        <p style="font-size: 15px;color:green;" >
                                        Origin: Bangladesh
                                        </p>
                                    <p style="font-size: 20px;color:blue;">Price: Tk. 210.00</p>
                                  
                                </div>
                            </center>
                        </div>
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
