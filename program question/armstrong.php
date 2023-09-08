<?php
 $num=153;
 $sum=0;
 $rem=0;
 $count=0;
 for($i=$num;$i>0;$i/=10)
 {
    $count++;
 } 
 $temp=$num;
 while($temp!=0)
 {
    $rem=$temp%10;
    $sum=$sum+($rem*$rem*$rem);
    $temp=$temp/10;
 }
 echo $sum;
//  echo pow(2,$count);
 if($sum==$num)
 {
    echo " armstrong";
 }
 else 
 {

     echo "not armstrong";
 }
 ?>