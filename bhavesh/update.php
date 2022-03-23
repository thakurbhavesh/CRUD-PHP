<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        input{
            margin-bottom:10px;
        }
        .s{
            margin:30px 450px;
        }
        h1{
            text-shadow: 2px 2px 1px magenta;
        }
        
    </style>
</head>
<body>
    <h1 class="text-center text-primary">Update Form</h1><br>
    <div class="s">
        
<form method="post" action="">
    <?php   
    
    $conn=mysqli_connect('localhost','root','','bhavesh');
    $i=$_GET['id'];
    $sel="SELECT * FROM `crud` where id='$i'";
    $run=mysqli_query($conn,$sel);
    $shiv=mysqli_fetch_assoc($run);
    $sel1='SELECT * FROM `master_states` ';
    $run1=mysqli_query($conn,$sel1);
    
    ?>
    
        <label>Name :</label><br>
        <input type="text" id="" value="<?php echo $shiv['name']?>" name="name" class="form-control"><br>
        <label for="">Gender :</label>
        <input type="radio" name="gender" value="male" <?php if($shiv['gender']=='male'){echo "checked";} ?>>Male
        <input type="radio" name="gender" value="female" <?php if($shiv['gender']=='female'){echo "checked";} ?>>Female<br>
        <br><label for="">Address :</label>
        <input type="text" name="address" id="" value="<?php echo $shiv['address']?>" class="form-control"><br>
        <label for="">City:</label>
        <input type="text" name="city" id="" value="<?php echo $shiv['city']?>" class="form-control"><br>
        <select name="hello" > 
    <?php
    while ($row=mysqli_fetch_assoc($run1)) {
        ?>
        <option  value="<?php echo  $row['state'] ?>"  style="font-size:22px" <?php if($shiv['state']==$row['state']){echo "selected";} ?>>
        <?php echo  $row['state'] ?>
        </option>
        <?php
    }
    ?>
    </select><br><br>
        <input type="submit" value="Update" name="submit" class="btn btn-primary">
        
    </form>
    </div>
<br><br>

    <?php 
   if(isset($_GET['name'])){
      
    $conn=mysqli_connect('localhost','root','','bhavesh');
    $i=$_GET['id'];
    
    $na=$_POST['name'];
    $n=$_POST['gender'];
    $nam=$_POST['address'];
    $name=$_POST['city'];
    $state=$_POST['hello'];
  
    
    $query="UPDATE `crud` SET `name`='$na',`gender`='$n',`address`='$nam',`city`='$name',`state`='$state' WHERE id='$i' ";
    $run=mysqli_query($conn,$query);
   
   }
    
?>

    
</body>
</html>