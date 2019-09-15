<?php
$name=$_POST['name'];

setcookie('name',$name);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="container">
 <a href="name.php"> <button class="btn btn1">Name</button></a>
  <a href="add.php"><button class="btn btn2">Address</button></a>
  <a href="mobile.php"><button class="btn btn3">Mobile</button></a>
  <a href="email.php"> <button class="btn btn4">E-mail</button></a>
</div>
  </body>
</html>
