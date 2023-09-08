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
    $name="Cat";  
    $age=20;
    $$age="21";
    ${$name}="Dog";  
    ${${$name}}="Monkey";  
    echo $name. "<br>";  //cat
    echo ${$name}. "<br>";  //dog
    echo $Cat. "<br>";  //dog
    echo ${${$name}}. "<br>";  //monkey
    echo $Dog. "<br>"; //monkey 
    echo $$age;

?>
    
</body>
</html>