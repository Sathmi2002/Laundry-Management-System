<?php
include 'index1.php';
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
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Contact ID</th>
      <th scope="col">User name</th>
      <th scope="col">User mail</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
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
</body>
</html>