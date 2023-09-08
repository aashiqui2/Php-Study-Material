<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> -->
    <form action="00_Super_Global.php" method="post">
    <!-- post method is use to colect the form data -->
    <input type="text" name="fname" placeholder="First Name" autocomplete="off"><br><br>
    <input type="text" name="lname" placeholder="Last Name" autocomplete="off"><br><br>
    <button type="submit">Submit</button>

    </form>

    <?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        echo $fname ."<br>".$lname;
    }
    
    ?>

</body>

</html>