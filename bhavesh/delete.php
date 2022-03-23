<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $id=$_GET['id'];
    $conn=mysqli_connect('localhost','root','','bhavesh');
    $del="delete from `crud` where id='$id'";
    $run=mysqli_query($conn,$del);
    if ($run) {
        header('location:index.php');
    }
    
    ?>
</body>
</html>