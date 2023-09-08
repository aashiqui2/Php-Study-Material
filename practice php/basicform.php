<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  <title>Document</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      
      font-family: montserrat;
      background: linear-gradient(120deg,#2980b9,#8e44ad);
      height: 100vh;
      overflow: hidden;
      
    }
    .container{
      position: absolute;
      top:50%;
      left:50%;
      transform: translate(-50%,-50%);
      width: 400px;
      background: white;
      border-radius: 10px;
    }
    .container h1{
      text-align: center;
      padding: 0 0 20px 0;
      border-bottom: 1px solid silver;
    }
    .container form{
      padding: 0 40px;
      box-sizing: border-box;
    }
    form .text_box{
      position: relative;
      border-bottom: 2px solid #adadad;
      margin: 30px 0;
    }
    .text_box input{
      width: 100%;
      padding: 0 5px;
      height: 40px;
      font-size: 16px;
      background: none;
      outline: none;
      border: none;

    }
    .text_box label{
      position: absolute;
      top: 50%;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      font-size: 16px;
      pointer-events: none;
      transition: .5s;
    }
    .text_box span::before{
      content:'';
      position: absolute;
      top: 40px;
      left: 0;
      width: 100%;
      height: 2px;
      background: #2691d9;
      transition: .5s;
    }
    .text_box input:focus ~label,
    .text_box input:valid ~label{
      top: -5px;
      color: #2691d9;
    }
    .text_box input:focus ~span::before,
    .text_box input:valid ~span::before{
      width: 100%;
    }
    .pass{
      margin: -5px 0 20px 5px;
      color: #a6a6a6;
      cursor: pointer;
    }
    .pass:hover{
      text-decoration: underline;
    }
    input[type="submit"]{
      width: 100%;
      height: 50px;
      border: 1px solid;
      background: #2691d9;
      border-radius: 25px;
      font-size: 18px;
      color: #e9f4fb;
      font-weight: 700;
      cursor: pointer;
      outline: none;
    }
    input[type="submit"]:hover{
      border-color: #2691d9;
      transition: .5s;
    } 
    .signup{
      margin:30px 0;
      text-align: center;
      font-size: 16px;
      color: #666666;
    }
    .signup a{
      color: #2691d9;
      text-decoration: none;
    }
    .signup a:hover{
      text-decoration: underlines;
    }
  
  </style>
</head>
<body>
  <?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name=$_POST['name'];
    $pass=$_POST['pass'];
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db="dbharry";
  
  // Create a connection
  $conn = mysqli_connect($servername, $username, $password,$db);
  if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
  // Submit these to a database
  // Sql query to be executed 
  $sql = "INSERT INTO `login` (`Username`, `Password`) VALUES ( '$name', '$pass');";
  $result = mysqli_query($conn, $sql);
  }
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> your record has been submitted.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  else{
      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';
  }
}
   ?>
  <div class="container">
   <h1>Login</h1>
   <form action="basicform.php" method="post">
    <div class="text_box">
      <input type="text" name="name" required>
      <span></span>
      <label for="username">Username</label>
    </div>
    <div class="text_box">
      <input type="password" name="pass" required>
      <span></span>
      <label for="pass">Password</label>
    </div>
    <div class="pass">Forget Password?</div>
    <input type="submit" value="Login">
    <div class="signup">
      Not a Valid user?<a href="#">Signup</a>
    </div>
   </form>
   
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>