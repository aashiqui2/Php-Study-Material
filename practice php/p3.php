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
    function aashiqui()
    {
        static $age=21;
        $age1=22;
        $age++;
        $age1++;
        echo "age:$age"; 
        echo "age1:$age1"; 
    }
    aashiqui();
    aashiqui();
    ?>
    
</body>
</html>