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
            <?php $i=8;
             
             require 'connection.php';
 
             $query = "select * from items where type=3 ";
             $query_run = mysqli_query($con,$query) or die(mysqli_error($con));
             $check_about_us = mysqli_num_rows($query_run)>0;
             if($check_about_us){

                while ($row = mysqli_fetch_array($query_run)) {
                      $i++;
                ?>
                  <div >
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="<?php echo $row['sub'] ?>.php">
                                <img src="img/<?php echo $row["image"] ?>"alt="Cerelac">
                            </a>
                            <center>
                                <div class="caption">
                                    
                                   
                                    <h3><?php echo $row['name']; ?></h3>
                                    <p>Price: Tk. <?php echo $row['price']; ?></p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart($i)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_essentials.php?id=<?php echo $i?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                 </div>
  
              
            <?php
              }
            }else{
              echo "not found";
            }
           ?>
            <div class=container></div>
            <?php
            require 'footer.php';
           ?>
        
        
    </body>
</html>
