<?php
session_start();
?>
<!DOCTYPE >
<html >
	<head>
		<link rel="shortcut icon" href="img/logoproject2.png" />	
		<title>Maternity In Style</title>
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/style.css"rel="stylesheet"type="text/css"/>
        <link href="css/addproduct.css"rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="css/footer.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		
        <style>
            
        </style>
	</head>
	   
	<body style="background-color: #9eb2c2;" >
            <?php
                require 'admin_header.php';
            ?>
            <div class="row">
		<div style="background-color: #9eb2c2;" class="col-md-6 col-sm-12">
			<div class="contact-in">
               <center>
				<h1 style="font-size:40px;">Add Product Details</h1>
              </center>
				<form method="post" action="adding_products.php">
                  <center>
					<input style="width:60%;" type="text"  name="name" placeholder="Enter product name" required="true" class="contact-in-input">
					<input style="width:60%;" type="text"  name="price" placeholder="Enter product price" required="true" class="contact-in-input">
					<input style="width:60%;" style="width:50%;" type="text"  name="image" placeholder="Enter the product image name with extention" required="true" class="contact-in-input">
                    <input style="width:60%;" type="text"  name="sub" placeholder="Enter product description page" required="true" class="contact-in-input">
                    <input style="width:60%;" type="text"  name="type" placeholder="Enter type(food=1,clothes=2,essentials=3)" required="true" class="contact-in-input">
					<br><br>
                    <input style="width:30%;border-radius:25px" type="submit" value="Add Product" class="contact-in-btn">
                   
                  </center>
				</form>
			</div>
		</div>
		
        <div style="background-color: #9eb2c2;" class="col-md-6 col-sm-12">
			<div class="contact-in">
               <center>
				<h1 style="font-size:40px;">Fill up to delete Product</h1>
              </center>
				<form method="post" action="deleting_product.php">
                  <center>
					<input style="width:60%;" type="text"  name="name" placeholder="Enter product name" required="true" class="contact-in-input">
					
					<br><br>
                    <input style="width:30%;border-radius:25px" type="submit" value="Delete Product" class="contact-in-btn">
                   
                  </center>
				</form>
			</div>
		</div>	
		</div>	
		
		
		  
      
	</body>
</html>