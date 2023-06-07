<?php
session_start();
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
        
        
        
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>

          <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Maternity In Style.</h1>
                       <p>Earn Your Comfort.</p>
                       <a href="products2.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>

           
          
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="babyfood.php">
                                <img src="img/babyfood.jpg" alt="Camera">
                           </a>
                           <br>
                           <center>
                                <div class="caption">
                                        <p style="color:#9E4244" id="autoResize">Baby Food</p>
                                        <p style="color:#d86b93">Choose the best for your baby.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="clothes.php">
                               <img src="img/momnme.jpg" alt="Watch">
                           </a>
                           <br>
                           <center>
                                <div class="caption">
                                    <p style="color:#9E4244" id="autoResize">Clothes</p>
                                    <p style="color:#d86b93">Be healthy, be stylish.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="essentials.php">
                               <img src="img/babyessentials.png" alt="Shirt">
                           </a>
                           <br>
                           <center>
                               <div class="caption">
                                   <p style="color:#9E4244" id="autoResize">Mom And Baby Essentials</p>
                                   <p style="color:#d86b93">choose the best for you and your child's comfort.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>

           <?php
            require 'footer.php';
           ?>
         </div>
    
  
    </body>
</html>