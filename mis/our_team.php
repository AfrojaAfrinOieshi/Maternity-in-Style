<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
            @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

* {
  padding: 0;
  margin: 0;
}

body {
  background-image:url(img/team.jpg);
  font-family: "Poppins", sans-serif;
  background-repeat: no-repeat;
  background-size: 100% 100%;
}


  
  .heading {
    font-size: 60px;
    color: black;
  }
  
  .heading span {
    font-style: italic;
    font-size: 30px;
  }
  
  .profiles {
    display: flex;
    justify-content: space-around;
    margin: 20px 80px;
  }
  
  .profile {
    flex-basis: 260px;
  }
  
  .profile .profile-img {
    height: 260px;
    width: 260px;
    border-radius: 50%;
    filter: grayscale(100%);
    cursor: pointer;
    transition: 400ms;
   
  }
  
  .profile:hover .profile-img {
    filter: grayscale(0);
  }
  .user-name {
    margin-top: 20px;
    font-size: 35px;
  }
  
  .profile h5 {
    font-size: 18px;
    font-weight: 100;
    letter-spacing: 3px;
    color: #ccc;
  }
  
  .profile p {
    font-size: 16px;
    margin-top: 20px;
    text-align: justify;
  }
  
  @media only screen and (max-width: 1150px) {
    .profiles {
      flex-direction: column;
    }
  
    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  
    .profile p {
      text-align: center;
      margin: 20px 60px 80px 60px;
      font-size: 20px;
    }
  }

  @media only screen and (max-width: 900px) {
    .heading {
      font-size: 40px;
      color: white;
      text-align: center;
    }
  
    .heading span {
      font-size: 15px;
    }
  
    .profiles {
      margin: 20px 0;
    }
  
    .profile p {
      margin: 20px 10px 80px 10px;
    }
  }
  
        </style>
           
        
      </head>
<body>
            <?php
            require 'header.php';
            require 'connection.php';

            $query = "select * from about_us ";
            $query_run = mysqli_query($con,$query) or die(mysqli_error($con));
            $check_about_us = mysqli_num_rows($query_run)>0;
            if($check_about_us){

              while ($row = mysqli_fetch_array($query_run)) {
                
              ?>
                
                <div class="profiles">
                <div class="profile">
                  <div  class="profile-img">
                    <?php echo '<img src="data:img;base64,'.base64_encode($row['img']).'"alt="img" style="height: 260px;width: 260px;border-radius: 50%;filter: grayscale(100%);cursor: pointer;transition: 400ms;filter: grayscale(0);">' ?>
                  </div>
                  <h3 class="user-name"><?php echo $row['name']; ?></h3>
                  <p>ID: <?php echo $row['id_no']; ?></p>
                  <p> Group:<?php echo $row['group_no']; ?></p>
                  <p> Section:<?php echo $row['section']; ?></p>
                </div>
             </div>
             <?php
              }
            }else{
              echo "not found";
            }
           ?>
     
          <?php
            require 'footer.php';
           ?>
            
</body>
</html>