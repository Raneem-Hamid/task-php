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
    <form action="./creat.php" method="post">
<label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="Password">Password:</label><br>
  <input type="Password" id="Password" name="Password"><br>
  <input type="submit" id="submit" name="login" value="submit">
</form>
</body>
</html>