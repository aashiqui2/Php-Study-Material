
<html>  
<body>  
 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html> 
<?php
if($_POST) 
{
    $num = $_POST['number']; 
    $reverse = strrev($num);  
          
    //checking if the number and reverse is equal  
    if($num == $reverse){  
        echo "The number $num is Palindrome";     
    }else{  
        echo "The number $num is not a Palindrome";   
    }  
}     


 ?>