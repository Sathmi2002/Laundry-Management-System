<?php
include 'connect.php';
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
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add user
            </a>
            
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Name</th>
      <th scope="col">Telephone No.</th>
      <th scope="col">Address</th>
      <th scope="col">city</th>
      <th scope="col">Postal code</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="select * from `employee`";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    while($row=mysqli_fetch_assoc($result))
    {
    $id=$row['employee_id'];
    $email=$row['email'];
  $password=$row["password"];
  $name=$row["name"];
  $number=$row["telephone_no"];
  $address=$row["address"];
  $city=$row["city"];
  $postal_code=$row["postal_code"]; 

  echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$email.'</td>
  <td>'.$password.'</td>
  <td>'.$name.'</td>
  <td>'.$number.'</td>
  <td>'.$address.'</td>
  <td>'.$city.'</td>
  <td>'.$postal_code.'</td>
  <td>
  <button class="btn btn-primary"><a href="update.php?
  updateid='.$id.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete.php?
  deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
</tr>';
    }
  }




  ?>
    
   

  </tbody>
</table>
    </div>
</body>
</html>