<?php


include 'index1.php';
?>

<html>

	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>CRYSTAL/ADMIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="style/index.css"> 
	</head>
	
	<body id="body_color">
		
		<div >
			<div class="wrapper_lin">
				<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
				
				<div class="form-box login">
					<h2>Login</h2>
					<form action="#">
						<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
							<input type="email" required>
							<label>Email</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
							<input type="password" required>
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
					<form action="#">
						<div class="input-box">
							<span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
							<input type="text" required>
							<label>Username</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
							<input type="email" required>
							<label>Email</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-open"></ion-icon></span>
							<input type="password" required>
							<label>Create a password</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
							<input type="password" required>
							<label>Confirm password</label>
						</div>
						<div class="terms-conditions">
							<label><input type="checkbox" required>I agree with the</label>
							<a href="#">Terms of Use & Privacy Policy</a>
						</div>
						<button type="submit" class="btn-next">Next</button>
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
		


	
		
		
		<div class="wrap_header" id="wrap_header">
			<header id="navbar">
				<div class="navbar">
					<div class="logo"><a href="#"><img src="img/logo full1.svg"></a></div>
					<ul class="links">
						<li><a href="admin.php">Customer</a></li>
						<li><a href="employee.php">Employee</a></li>
						<li class="list-active"><a href="display1.php">Contact</a></li>
					</ul>
					
					<button class="action-btn">Login</button>
					<div class="toggle_btn">
						<i class="fa-solid fa-bars"></i>
					</div>
		
					<div class="dropdown_menu">
                        <li><a href="admin.php">Customer</a></li>
						<li><a href="employee.php">Employee</a></li>
						<li><a href="display1.php">Contact</a></li>
						<li><a href="#" class="action-btn">Get Started</a></li>
					</div>
		
				</div>
			</header>
		</div>

		
		
		
		<!------------------------------------------------------------------------>
		
		
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

        <div class="container">
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Contact ID</th>
      <th scope="col">User name</th>
      <th scope="col">User mail</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="select * from `tblcontact`";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    while($row=mysqli_fetch_assoc($result))
    {
    $id=$row['contact_id'];
    $username=$row['user_name'];
  $email=$row["user_email"];
  $subject=$row["subject"];
  $content=$row["content"];
  

  echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$username.'</td>
  <td>'.$email.'</td>
  <td>'.$subject.'</td>
  <td>'.$content.'</td>
  <td>
  
  <button class="btn btn-danger"><a href="delete1.php?
  deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
</tr>';
    }
  }




  ?>
    
   

  </tbody>
</table>
    </div>


    <!-------------------------------------------------------------------------------------------------->

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
				We provide you the best cleaning services as per your requirements.We have many services such as washing,ironing and dry cleaning.
			  </p>
		
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