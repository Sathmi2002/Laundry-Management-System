<?php
include 'index1.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tblcontact` where contact_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:display1.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>