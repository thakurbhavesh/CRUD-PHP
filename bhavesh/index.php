<?php
$conn=mysqli_connect('localhost','root','','bhavesh');
$sel='SELECT * FROM `master_states` ';
$run=mysqli_query($conn,$sel);
// while ($row=mysqli_fetch_assoc($run)) {


//     echo $row['state'];
// }

if(isset($_POST["submit"])){
    
    $conn=mysqli_connect('localhost','root','','bhavesh');

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $hello=$_POST['hello'];
    
    
    
    $sql="INSERT INTO `crud`( `name`, `gender`, `address`, `city`,`state`) VALUES ('$name','$gender','$address','$city','$hello')";
    $res=mysqli_query($conn,$sql);


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project </title>
    <style>
       
        th{
            text-align: center;
        }
        
        .s{
            margin:30px 450px;
        }
        option{
            width: 500px;
        }
        label{
            color: grey;
        }
        h1{
            text-shadow: 2px 2px 1px magenta;
        }
    </style>
    
</head>
<body><fieldset class="bg-warning">
    <h1 class="text-center text-warning">Insert Record</h1>
   <div class="s">

   <form method="post">
        <label>Name :</label><br>
        <input type="text" name="name" id="" class="form-control" placeholder="enter your name"><br>
        <label for="">Gender :</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br>
        <label for="">Address :</label>
        <input type="text" name="address" id="" class="form-control" placeholder="enter your address"><br>
        <label for="">City:</label>
        <input type="text" name="city" id="" class="form-control" placeholder="enter your city"><br>
        <label for="">State</label><br>
        
        <select name="hello" >
<?php
while ($row=mysqli_fetch_assoc($run)) {
    ?>
    
    <option  value="<?php echo  $row['state'] ?>"  class="form-control" style="font-size:25px">
    <?php echo  $row['state'] ?>
    </option>
    
    <?php
}


?>
</select>
            <br><br>
        <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary">
        
    </form>

   </div>
   </fieldset>
<div>
    <h1 class="text-center">Show Records</h1>
<center>
<table border="2"  class="text-center table table-striped table-hover">
    <tr class="text-center mt-2 info">
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    
    $conn=mysqli_connect('localhost','root','','bhavesh');
    $sel='SELECT * FROM `crud` ';
    $run=mysqli_query($conn,$sel);
    while ($shiv=mysqli_fetch_assoc($run)) {
    ?>
    <tr class="success">
        <td><?php echo  $shiv['id'] ?></td>
        <td><?php echo  $shiv['name'] ?></td>
        <td><?php echo  $shiv['gender'] ?></td>
        <td><?php echo  $shiv['address'] ?></td>
        <td><?php echo  $shiv['city'] ?></td>
        <td><?php echo  $shiv['state'] ?></td>

        <td><a href="update.php?id=<?php echo $shiv['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $shiv['id'];?>">Delete</a></td>
    </tr>
    <?php
        
    }

    ?>

</table><br><br>
</center>
</div>




</body>
</html>