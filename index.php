<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $mobile = $_POST["mobile"];
  $address = $_POST["address"];
  $food = $_POST["food"];

  $query = "INSERT INTO tb_data VALUES('', '$name', '$mobile', '$address', '$food')";
  $result = mysqli_query($conn,$query);
  if($result){
    // echo
    // "
    // <script> alert('Data Inserted Successfully'); </script>
    // ";
    header("location:show_data.php");

  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food App</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="myform">
                <form class="" action="" method="post" autocomplete="off">
                    <label for="">Name</label>
                    <input type="text" name="name" required value="">
    
                    <label for="">Mobile Number</label>
                    <input type="text" name="mobile" required value="">
                    
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
    
                    <label for="">Food</label>
                    <select class="" name="food" required>
                        <option value="" selected hidden>Select Food</option>
                        <option value="pizza">Pizza</option>
                        <option value="sandwitch">Sandwitch</option>
                        <option value="burger">Burger</option>
                    </select>    
                    
                    <button type="submit" name="submit">Add to Cart</button>
                  </form>
                  <button  class="btn btn-primary"><a class="text-light" href="show_data.php">View Order</a></button>
            </div>
        </div>
    </div>
   
  </body>
</html>