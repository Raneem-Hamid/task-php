<?php
require_once'./cont.php';
$sql = 'SELECT * FROM signup';

$getData = $conn->query($sql);

$user = $getData->fetchAll(PDO::FETCH_OBJ);

//    print_r( $user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./creat.php"method="post">
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="mobile">Mobile:</label><br>
  <input type="number" id="mobile" name="mobile"><br>
  <label for="fname">Full name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="cpassword">Password Confirmation:</label><br>
  <input type="Password" id="cpassword" name="cpassword"><br>
  <label for="date">Date of Birth:</label><br>
  <input type="date" id="date" name="date"><br>
  <input type="hidden" id="role" name="role"value="2"><br>
  <input type="submit" id="submit" name="submit" value="submit">
  
</form>
</body>
</html>