<?php
require 'connection.php';
$id = $_GET['updateid'];
$sql="select * from tb_data where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$mobile = $row["mobile"];
$address = $row["address"];
$food = $row["food"];




if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $mobile = $_POST["mobile"];
  $address = $_POST["address"];
  $food = $_POST["food"];

  $query = "UPDATE `tb_data` SET name='$name', mobile='$mobile', address='$address', food='$food' WHERE id=$id";
  $result = mysqli_query($conn,$query);
  if($result){
    // echo"Updated Successfully";
    // "
    // <script> alert('Data Inserted Successfully'); </script>
    // ";
    header("location:show_data.php");
  }else{
    echo "Failed";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Food App</title>
    <link rel="stylesheet" href="style copy.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style media="screen">
label {
    display: block;
}
</style>

<body>
    <div class="container d-flex justify-content-center w-75 ">

        <div class="right w-100">
            <div class="myform">
                <form class="" action="" method="post" autocomplete="off">
                    <label for="">Name</label>
                    <input type="text" name="name" required value=<?php echo $name?>>

                    <label for="">Mobile Number</label>
                    <input type="text" name="mobile" required value=<?php echo $mobile?>>

                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"><?php echo $address?></textarea>

                    <label for="">Food</label>
                    <select class="" name="food" required>
                        <option value="" selected hidden><?php echo $food?></option>
                        <option value="pizza">Pizza</option>
                        <option value="sandwitch">Sandwitch</option>
                        <option value="burger">Burger</option>
                    </select>
                    <button class="btn btn-primary" type="submit" name="submit">Update</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>