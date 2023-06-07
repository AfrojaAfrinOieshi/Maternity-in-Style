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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Bonheur+Royale&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Birthstone&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Ephesis&display=swap');
        </style>
           
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>

          <div id="bannerImage2">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1 style="font-family: 'Ephesis', cursive;font-size:100px;">About Us</h1>
                       
                   </div>
                   </center>
               </div>
           </div>

         <?php
            
            require 'connection.php';

            $query = "select * from description";
            $query_run = mysqli_query($con,$query) or die(mysqli_error($con));
            $check_about_us = mysqli_num_rows($query_run)>0;
            if($check_about_us){

              while ($row = mysqli_fetch_array($query_run)) {
              ?>
                <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                       <div  class="thumbnail">
                           
                           <br>
                           <center>
                                <div  style="background-color:#FBE09B"  class="caption">
                                <h3 style="font-family: 'Bonheur Royale', cursive;font-size:45px;"><?php echo $row['title_name']; ?></h3>
                                <p style="color:#990E2F;font-family: 'Birthstone', cursive;font-size:28px;"><?php echo $row['description']; ?></p>
                                </div>
                           </center>
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
         ?>
         <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                       
                       <center>    
                      <a href="map.php"><button style="height: 60px;width:250px;background-color:#990E2F;color:white;border-radius:20px;font-size:30px;font-family: 'Birthstone', cursive;">Contact us</button></a>
                        </center>     
                       
                   </div>
                   
                   </div>
               </div>
           </div>

           
          <br><br>
           
          <?php
            require 'footer.php';
           ?>
    
        </div>
        
    </body>
</html>