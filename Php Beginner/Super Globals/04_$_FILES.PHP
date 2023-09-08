<?php 
if(isset($_FILES['images'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $filename=$_FILES['images']['name'];
    $filetype=$_FILES['images']['type'];
    $filesize=$_FILES['images']['size'];
    $fileerror=$_FILES['images']['error'];
    $tmpname=$_FILES['images']['tmp_name'];


   if(move_uploaded_file( $tmpname,"img/".$filename)) {
    echo "success";
   }else{
    echo "failed";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files Superglobals</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="images"><br><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>