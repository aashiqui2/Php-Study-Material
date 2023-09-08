<?php 
function display($greeting,$message="hey bitch")
{
echo $greeting;
echo"<br>";
echo $message;
$num=func_get_arg(0);
echo $num;
} 
display("iam ok","iam not a pyschopath");
 ?>