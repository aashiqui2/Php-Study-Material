<!-- 
//cookies
//it is a piece of information stored inside our system we should not set username and passord using cooies





// //it will stored inside our system and it is not recommended to store the password and login info inside the cookie in our system
// //setcookie ( name , value ,expiration time , path = "");

// echo "Welcome to the world of cookies<br>";
// // Syntax to set a cookie
// // echo time();
// setcookie("category", "Books", time() + 86400, "/"); 
// echo "The cookie is set<br>"; -->


<?php  

// setcookie(name,value,expires,path);

// $catagory_name="food";
// $catagory_value="Biriyani";
setcookie("Gadgets","laptop",time()+(86400*30),"/");
//86400 seconds=one day
// / is to set the cookie to entire website

echo "cookie is set";

?>

