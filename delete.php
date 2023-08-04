<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];
    $sql = "delete from tb_data where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "Deleted Successfully";
        header("location:show_data.php");

    }else{
        die(mysqli_error($conn));
    }
}
?>