<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                      
                           
                       </button>
                       <a href="index.php" class="navbar-brand">
                            <img style="float:left ;margin-top=0px;" src="img/logoproject2.png" alt="..." height="35">
                             <span style="float:left;" >    aternity In Style</span>
                       </a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="products2.php"><span class="fas fa-luggage-cart"></span> All Products</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="map.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                           <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> profile </a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <li><a href="about_us.php"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
                           <?php
                           }else{
                            ?>
                           <li><a href="products2.php"><span class="fas fa-luggage-cart"></span> All Products</a></li>
                           <li><a href="signup.php"><span class="fas fa-user-plus"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <li><a href="map_without_login.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                           <li><a href="about_us.php"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
                           <li><a href="admin_login.php"><span class="fas fa-users-cog"></span> Admin</a></li>
                            
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>