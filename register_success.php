<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$city=$_POST['city'];
$country=$_POST['country'];

if(isset($_POST['submit'])){
   $sql = "INSERT INTO `register` (`name`,`email`,`password`,`phone`,`city`,`country`)
   VALUES('$name','$email','$phone','$password','$city','$country')";
   $conn->exec($sql);
}else{
    echo "Can't insert data";
}


?>