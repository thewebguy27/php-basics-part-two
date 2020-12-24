<?php
$errname=$erremail="";
$name=$email="";
    if($_POST){
        if(empty($_POST['name'])){
            $errname='Name is required';
        }
        else{
            $name=$_POST['name'];
        }
        if(empty($_POST['email'])){
            $erremail='Email is required';
        }
        else{
            $email=$_POST['email'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="form">
        <h5 class="text-red">* fields are required</h5>
        <label class="text-red">*</label>
        <input type="text" name="name" placeholder="Enter your name" >
        <span class="text-red"><?php echo $errname?></span>
        <label class="text-red">*</label>
        <input type="email" name="email" placeholder="Enter your email" >
        <span class="text-red"><?php echo $erremail?></span>
        <input type="submit" value="Submit">
    </form>
    <h3>Your Input</h3>
    <p><?= $name ?></p>
    <p><?= $email ?></p>
</body>
</html>