<?php 
function check_prime($num)
{
    if($num==1)
    {
        return 0;
    }
    for($i=2;$i<=$num/2;$i++)
    {
        if($num%$i==0)
        {
            return 0;
        }
    }
    return 1;
}
$num=1;
$flag=check_prime($num);
if($flag==1)
{
    echo "its is prime number";
}
else
  echo "it is not a prime";    
 ?>