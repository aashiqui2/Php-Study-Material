<?php 
require_once 'login_connect.php';
require 'login_create_table.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Login</title>
  </head>
  <body>
    <div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded"><i class="fa-solid fa-user"></i> Login Here!</h1>
    <div class="d-flex justify-content-center">
      <form action="" method="post" class="w-50">
        <div class="pt-2">
        <?php 
        inputElement("<i class='fas fa-id-badge'></i>","Email", "email","email");
         ?>
        </div>
        <div class="pt-2">
                    <?php inputElement("<i class='fa-solid fa-key'></i>","Password", "pass","pass"); ?>
        </div>
        <div class="d-flex justify-content-center">
          <?php 
          button("btn-create","btn btn-success","<i class='fa-solid fa-right-to-bracket'></i>","data-toggle='tooltip' data-placement='bottom'");
           ?>
        </div>
        
      </form>


    </div>

    </div>
    <?php
    function inputElement($icon, $placeholder, $name, $value){
      $ele = "
          
          <div class=\"input-group mb-2\">
                          <div class=\"input-group-prepend\">
                              <div class=\"input-group-text bg-success\">$icon</div>
                          </div>
                          <input type=\"email\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                      </div>
      
      ";
      echo $ele;
  }
  function button($btnid,$styleclass, $text, $name)
  {
$btn="<button name='$name class='$styleclass' id='$btnid'>$text</button>";
echo"$btn";
  }
  
?>
  </body>
</html>
