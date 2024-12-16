<?php


include 'connect.php';

if(isset($_POST["submit"]))
{
  $email=$_POST["email"];
  $password=$_POST["password"];
  $name=$_POST["name"];
  $number=$_POST["number"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $postal_code=$_POST["postalcode"];

  $sql="insert into employee(email,password,name,telephone_no,address,city,postal_code)
  values('$email','$password','$name','$number','$address','$city','$postal_code')";
  
  $result =mysqli_query($con,$sql);
  if($result){
    //echo"Data inserted successfully";
    header('location:display.php');
  }  
  else{
    die(mysqli_error($con));
  }

}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
<div class="container my-5">

<form class="row g-3" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter your email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Enter your password">
  </div>
  <div class="name">
    <label for="inputname" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="inputname" placeholder="Enter your name">
  </div>
  <div class="telephone">
    <label for="inputtp" class="form-label">Telephone No.</label>
    <input type="text" name="number" class="form-control" id="inputtp" placeholder="Enter your number">
  </div>
   <div class="col-12">
    <label for="inputAddress1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress1" placeholder="Enter address">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter city">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" name="postalcode" class="form-control" id="inputZip" placeholder="1234">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
    
  </body>
</html>