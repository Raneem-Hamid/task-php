<?php
require_once'./cont.php';

if(isset($_POST['submit'])){
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $fname=$_POST["fname"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $date=$_POST["date"];
    $role=$_POST["role"];
print_r($_POST);
$insert = $conn->prepare("INSERT INTO signup (email,mobile,fname,`password`,cpassword,`date`,`role`) VALUES (?,?,?,?,?,?,?)");
    $insert->execute([$email,$mobile,$fname,$password,$cpassword,$date,$role]);

// $sql="INSERT INTO signup (email,mobile,fname,password,cpassword,date,role)
// VALUES (:email,:mobile,:fname,:password,:cpassword,:date,:role)";
// $query=$conn->prepare ($sql);
// $query->bindparam(':email',$email,PDO::PARAM_STR);
// $query->bindparam(':mobile',$mobile,PDO::PARAM_INT);
// $query->bindparam(':fname',$fname,PDO::PARAM_STR);
// $query->bindparam(':password',$password,PDO::PARAM_STR);
// $query->bindparam(':cpassword',$cpassword,PDO::PARAM_STR);
// $query->bindparam(':data',$data,PDO::PARAM_STR);
// $query->bindparam(':role',$role,PDO::PARAM_STR);
// $query->excute();
}
header("location:welcome.php");
if (isset($_POST['login'])) {
    $email=$_POST["email"];
    $stmt = $conn->query("SELECT * FROM signup WHERE email='$email' ");

    $user = $stmt->fetch();
    print_r($user);
    // header("Location: welcome.php");
    if (count($user) > 0) {
        if ($user['role'] == 1) {
            header("Location: admin.php");
        } elseif ($user['role'] == 2) {
            header("Location: welcome.php");
        }
    }
}

?>