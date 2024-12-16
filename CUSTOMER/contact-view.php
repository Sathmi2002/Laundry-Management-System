<?php


include 'connect.php';

if(isset($_POST["send"]))
{
  $email=$_POST["userEmail"];
  $uname=$_POST["userName"];
  $sub=$_POST["subject"];
  $content=$_POST["content"];

  $sql="insert into tblcontact(user_name,user_email,subject,content)
  values('$uname','$email','$sub','$content')";
  
  $result =mysqli_query($con,$sql);
  if($result){
    //echo"Data inserted successfully";
    header('location:home.php');
  }  
  else{
    die(mysqli_error($con));
  }

}

?>

<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<div class="">
			<div class="wrapper_lin">
				<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
				
				<div class="form-box login">
					<h2>Login</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
					<form action="login.php">
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

					<form  metod="post" action="signup-check.php">
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
						<button type="submit" class="btn-next" name="submit">Next</button>
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
						<li><a href="home.php">Home</a></li>
						<li><a href="wash.php">Order now</a></li>
						<li><a href="About us.html">About</a></li>
						<li class="activepage"><a href="contact-view.php">Contact us</a></li>
					</ul>
					
					<a href="#" class="profile"><ion-icon name="person-circle-outline"></ion-icon></a>
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




    <div class="form-container">
        <form name="frmContact" id="" frmContact="" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

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