<?php
include("connection.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display_data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <button class="btn btn-primary my-5 "><a href="index.php" class="text-light">Order Now</a></button>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Order</th>
                    <th scope="col">Apply Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_data";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $mobile = $row["mobile"];
                        $address = $row["address"];
                        $food = $row["food"];

                        echo '
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$address.'</td>
                            <td>'.$food.'</td>
                            <td>
                                <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                                <button class="btn btn-danger" onclick="confirmDelete('.$id.')">Delete</button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete?")) {
                window.location.href = "delete.php?deleteid=" + id;
            }
        }
    </script>
</body>
</html>
