<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<!-- GET METHOD -->

<a href="<?php $_SERVER['PHP_SELF']; ?>?subject=PHP">Click Me <br></a>

<?php  
echo "this is ".$_GET['subject']." Tutorial";
?>


<!-- when to use get and post -->
<!-- get is not secure -->
<!-- post is secure     -->
</body>
</html>