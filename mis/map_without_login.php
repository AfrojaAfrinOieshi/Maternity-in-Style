<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <link href="css/map.css"rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="css/footer.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            .contact-in:nth-child(1) {
                 background-image: url("img/1.jpg");
            }
        </style>
	</head>
	   
	<body>
            <?php
                require 'header.php';
            ?>
		<div class="contain"></div>	
		<div class="contact-wrap">
			<div class="contact-in">
				<h1>Contact Info</h1>
				<h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
				<p>019XXXXXXXX</p>
				<h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
				<p>maternityinstyle@gmail.com</p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
				<p>House#10,Road#01,Nikunja-2,Dhaka-1229</p>
				<ul>
					<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.linkedin.com/signup"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
				</ul>
			</div>
            
			<div class="contact-in">
				<h1>Send a Message</h1>
				<form method="post" action="contact_us_without.php">
					<input type="text"  name="name" placeholder="name" class="contact-in-input" >
					<input type="text"  name="email" placeholder="email" class="contact-in-input">
					<input type="text"  name="subject" placeholder="subject" class="contact-in-input">
					<textarea  name="message" placeholder="message" class="contact-in-textarea"></textarea>
					<input type="submit" value="SUBMIT" class="contact-in-btn">
				</form>
			</div>
            
			<div class="contact-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.264100009706!2d90.41279297396251!3d23.83167983819728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka%2C%20Bangladesh!5e0!3m2!1sen!2sin!4v1632867354632!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<div class="contain"></div>	
		<?php
            require 'footer.php';
           ?>
		  
	</body>
</html>