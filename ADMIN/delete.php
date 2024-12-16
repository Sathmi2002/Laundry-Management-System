<?php
include 'index1.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employee` where employee_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>