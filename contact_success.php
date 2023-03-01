<?php
include("connection.php");
$name       =$_POST['name'];
$phone      =$_POST['phone'];
$email      =$_POST['email'];
$message    =$_POST['message'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO `contact`(`name`,`email`,`phone`,`message`) 
    VALUES('$name','$email','$phone','$message')";
    $conn->exec($sql);

}else{
    echo "Please insert data";
}


?>
