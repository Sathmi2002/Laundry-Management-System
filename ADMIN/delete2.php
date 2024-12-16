<?php
include 'index1.php';
if(isset($_GET['deleteid'])){
    $cid=$_GET['deleteid'];

    $sql="delete from `customer` where Customer_ID=$cid";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>