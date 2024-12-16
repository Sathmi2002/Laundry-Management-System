<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel='stylesheet' href='style/index.css' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
  <!-- Navbar start -->
  <div class="wrap_login">
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
    <header id="navbar" >
      <div class="navbar">
        <div class="logo"><a href="#"><img src="img/logo full1.svg"></a></div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li class="list-active"><a href="wash.php">Order now</a></li>
          <li><a href="About us.html">About</a></li>
          <li><a href="contact-view.php">Contact us</a></li>
        </ul>

        <div class="box">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </div> 
        
        
        
          
        <a href="#" class="profile"><ion-icon name="person-circle-outline"></ion-icon></a>
        <button class="action-btn">Login</button>
        <div class="toggle_btn">
          <i class="fa-solid fa-bars"></i>
        </div>
  
        <div class="dropdown_menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="wash.php">Order now</a></li>
          <li><a href="About us.html">About</a></li>
          <li><a href="contact-view.php">Contact us</a></li>
          <li><a href="#" class="action-btn">Login</a></li>
        </div>
  
      </div>
    </header>
  </div>
  <!-- Navbar end -->
  
  <br>
    <br>
    <br>
    

  <div class="container">
    <h2 class="title">Select Your Service</h2><br>
    <div class="wash">
    <a  href="wash.php"><button class="buton12">Wash</button></a>
    <a  href="iron.php"><button class="buton12">Iron</button></a>
    <a  href="dryclean.php"><button class="buton12-active">Dry clean</button></a>
    </div>

    <br>
    <br>
    <br>
    

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="300">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i>Rs</i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity:</b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <script src='js/Ordernow.js'></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
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
</body>

</html>