

<html>

	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>CRYSTAL/Home</title>
		<link rel="stylesheet" href="styles/style.css"> 
		
	</head>
	
	<body id="body_color">
		
		<div class="wrap_login">
			<div class="wrapper_lin">
				<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
				
				<div class="form-box login">
					<h2>Login</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
					<form action="login.php" method="post">
						<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
							<input type="email" name="email" required>
							<label>Email</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
							<input type="password" name="password" required>
							<label>Password</label>
						</div>
						<div class="remember-forgot">
							<label><input type="checkbox">Remember me</label>
							<a href="#">Forgot Password?</a>
						</div>
						<button type="submit" class="btn">Login</button>
						<div class="login-register">
							<p>Don't have an account? <a href="#" class="register-link">Register</a></p>
						</div>
					</form>
				</div>
				
				<div class="form-box register">
				<h2>Registation</h2>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>

				<?php if (isset($_GET['success'])) { ?>
					<p class="success"><?php echo $_GET['success']; ?></p>
				<?php } ?>

				<form action="signup-check.php" method="post">
					<div class="input-box">
						<span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
						<input type="text" name="uname" required>
						<label>Username</label>
					</div>

					<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email" name="Email" required>
						<label>Email</label>
					</div>

					<div class="input-box">
						<span class="icon"><ion-icon name="lock-open"></ion-icon></span>
						<input type="password" name="password" required>
						<label>Create a password</label>
					</div>

					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input type="password" name="re_password" required>
						<label>Confirm password</label>
					</div>

					<div class="terms-conditions">
						<label><input type="checkbox" required>I agree with the</label>
						<a href="#">Terms of Use & Privacy Policy</a>
					</div>
					<button type="submit" class="btn-nextt">Register</button>
					<div class="login-register">
						<p>Already have an account? <a href="#" class="login-link">Login</a></p>
					</div>
				</form>
			</div>
				
				<div class="form-box details">
					<h2>Welcome</h2>
					<form action="#">
						<div class="input-box">
							<span class="icon"><ion-icon name="person"></ion-icon></span>
							<input type="text" required>
							<label>Full name</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="home"></ion-icon></span>
							<input type="text" required>
							<label>Address(line1)</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="home"></ion-icon></span>
							<input type="text" required>
							<label>Address(line2)</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="business"></ion-icon></span>
							<input type="text" required>
							<label>City</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="call"></ion-icon></span>
							<input type="text" required>
							<label>Phone number</label>
						</div>
						<div class="btn-box">
							<a href="#" class="btn-back">Back</a>
							<button type="submit" class="btn-register">Register</button>
						</div>
						<div class="login-register">
							<p>I will fill this later. <a href="#" class="login-link">Skip & Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
		


	
		<div class="wrapper" id="wrap">
			<section class="parallax">
				<image src="images/bg1.png" id="bg1">
				<image src="images/up2.png" id="up2">
				<image src="images/up6.png" id="up6">
				<image src="images/up5.png" id="up5">
				<image src="images/up4.png" id="up4">
				<image src="images/up3.png" id="up3">
				<image src="images/log1.svg" class="log1" id="log1">
				<image src="images/up1.png" id="up1">
			</section>
		</div>

		
		<div class="wrap_header" id="wrap_header">
			<header id="navbar">
				<div class="navbar">
					<div class="logo"><a href="#"><img src="images/logo full1.svg"></a></div>
					<ul class="links">
						<li class="activepage"><a href="home.php">Home</a></li>
						<li><a href="wash.php">Order now</a></li>
						<li><a href="About us.html">About</a></li>
						<li><a href="contact-view.php">Contact us</a></li>
					</ul>
					
					<a href="profile.php" class="profile"><ion-icon name="person-circle-outline"></ion-icon></a>
					<button class="action-btn">Login</button>
					<div class="toggle_btn">
						<i class="fa-solid fa-bars"></i>
					</div>
		
					<div class="dropdown_menu">
						<li><a href="home.php">Home</a></li>
						<li><a href="wash.php">Order now</a></li>
						<li><a href="About us.html">About</a></li>
						<li><a href="contact-view">Contact us</a></li>
						<li><a href="#" class="action-btn">Login</a></li>
					</div>
		
				</div>
			</header>
		</div>


		
		<div class="image-slider" id="image-slider">
			<div class="img-slider">
				<div class="slide active">
					<img src="images1/1.jfif" alt="">
					<div class="info">
						<h2>Crystal Laundry Services</h2>
						<p>Want to be free from one of the most boring chores,Laundry?<br>Join with us.<br>We provide you with the best services.</p>
					</div>
				</div>
				<div class="slide">
					<img src="images1/2.jfif" alt="">
					<div class="info">
						<h2>Washing</h2>
						<p>Your laundry will be cleaned with the best quality detergents and soap.</p>
					</div>
				</div>
				<div class="slide">
					<img src="images1/3.jfif" alt="">
					<div class="info">
						<h2>Ironing</h2>
						<p>We make sure your clothes are wrinkle free and looking neat for any occasion</p>
					</div>
				</div>
				<div class="slide">
					<img src="images1/4.jfif" alt="">
					<div class="info">
						<h2>Dry Cleaning</h2>
						<p>Dry cleaning is basically cleaning clothes using a solvent with a little or no water.We use dry cleaning machines with the most technically advanced dry cleaning machines for this.</p>
					</div>
				</div>
				<div class="slide">
					<img src="images1/5.jfif" alt="">
					<div class="info">
						<h2>Folding and packaging</h2>
						<p>Our employees are well trained to deliver your laundry without any damage.We will make sure that your laundry in a better quality than before.</p>
					</div>
				</div>
				<div class="navigation">
					<div class="imgbtn active"></div>
					<div class="imgbtn"></div>
					<div class="imgbtn"></div>
					<div class="imgbtn"></div>
					<div class="imgbtn"></div>
				</div>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h2 class="topic">How it works</h2>
		
		<div class="three_btn" id="threebtn">
			<div class="circl">
				<img src="icon/truck-fast-solid.svg">
				<h4>1</h4>
				<p>Place your order</p>
			</div>
			<div class="circl">
				<img src="icon/delivered-box-verification-symbol.png">
				<h4>2</h4>
				<p>Verify your order</p>
			</div>
			<div class="circl">
				<img src="icon/rest.png">
				<h4>3</h4>
				<p>Sit and relax</p>
			</div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h2 class="topic">At Your Service</h2>

		<div class="discript_box">
			<div class="di_box">
				<h2>Wash</h2>
				<p>Your laundry will be cleaned with the best quality detergents and soap.</p>
			</div>
			<div class="di_box">
				<h2>Dry Clean</h2>
				<p>Dry cleaning is basically cleaning clothes using a solvent with a little or no water.We use dry cleaning machines with the most technically advanced dry cleaning machines for this.</p>
			</div>
			<div class="di_box">
				<h2>Iron</h2>
				<p>We make sure your clothes are wrinkle free and looking neat for any occasion</p>
			</div>
			<div class="di_box">
				<h2>Press</h2>
				<p>We make sure your clothes and garments are smoothed and shaped well using the best technologies.</p>
			</div>
			<div class="di_box">
				<h2>Flash (24 Hours)</h2>
				<p>We are available 24/7.You just have to place your order.</p>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>



		<footer class="footer-distributed">

<div class="footer-left">

  <div class="logo2">
    <img src="img/logo full1.svg" href="home.html">
</div>
  
  
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>NO.22 lake side road</span> Wales Park,Kandy</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+94 815 696 523</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">support@company.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About the company</span>
    We provide you the best cleaning services as per your requirements.We have many services such as washing,ironing and dry cleaning.  </p>

</div>

<hr class="footer__divider">

<div class="footer__bottom">
  <span class="copyright">&copy; 2023 Company. All rights reserved.</span>
  <ul class="footer__list2">
      <li class="footer__list-item">
          <a href="#" class="footer__list-link">
              <i class="ri-facebook-circle-line"></i>
          </a>
      </li>
      <li class="footer__list-item">
          <a href="#" class="footer__list-link">
              <i class="ri-instagram-line"></i>
          </a>
      </li>
      <li class="footer__list-item">
          <a href="#" class="footer__list-link">
              <i class="ri-twitter-line"></i>
          </a>
      </li>
      <li class="footer__list-item">
          <a href="#" class="footer__list-link">
              <i class="ri-linkedin-line"></i>
          </a>
      </li>
  </ul>
</div>

</footer>
		
	
		<script src="js/script.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		
	</body>

</html>