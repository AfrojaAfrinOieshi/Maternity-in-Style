<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    
    
    
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
            @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Monoton&family=Permanent+Marker&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Shrikhand&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Permanent+Marker&family=Shrikhand&display=swap');
            .GFG {
            background-color: #EA8161;
            border: 2px solid #A02843;
            color: #A02843;
            padding: 5px 25px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
            border-radius:25px;
        }
        </style>
        
        
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
        <div style="height:50px; "class="container"></div>

        <div class="container">
               
               <div class="row">
                 
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           
                           <img src="img/profilepicture.png" alt="profile">
                           
                          
                       </div>
                   </div>
                   <?php
                        
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

                   <div class="col-md-9 col-sm-6">

                               <div class="caption">
                                   <h2 style="color:#A02843;font-family: 'Shrikhand', cursive;">Profile Details</h2>
                                   <p style="font-size: 18px;font-family: 'Noto Serif', serif;">
                                        Name   :<?php echo $row['name']; ?> 
                                    </P>
                                    <p style="font-size: 18px;font-family: 'Noto Serif', serif;" >
                                        Email  : <?php echo $row['email']; ?>
                                    </p>
                                    <p style="font-size: 18px;font-family: 'Noto Serif', serif;" >
                                        Contact: <?php echo $row['contact']; ?>
                                    </p>
                                    <p style="font-size: 18px;font-family: 'Noto Serif', serif;" >
                                        City      :<?php echo $row['city']; ?>
                                    </p>
                                    <p style="font-size: 18px;font-family: 'Noto Serif', serif;" >
                                        Address    :<?php echo $row['address']; ?>
                                    </p>
                                    <a href='edit_profile.php'>
                                                <button class="GFG">
                                                   Edit
                                                </button>
                                     </a>
                                                                       
                            </div>
                   </div>
                   <?php
              }
            }else{
              echo "not found";
            }
           ?>
                  
               </div>
               
           </div>
          
           
          
           <div style="height:80px; "class="container"></div> 

           
         </div>
         <?php
            require 'footer.php';
        ?>
    
 
    </body>
</html>