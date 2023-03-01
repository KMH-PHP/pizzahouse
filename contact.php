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
   echo "Send success";
}else{
    echo "Can't insert data";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        #nav-bar{
            list-style-type: none;
        }
        #nav-item{
            display: inline-block;
            padding-right: 50px;
        }
        h2{
            padding-left: 100px;
            padding-right:300px;
        }
        #header,#footer{
            background-color: pink;
            display:flex;
        }
    
        #nav-item-footer{
            display: inline-block;
            padding-right: 50px;
        }
        #company{
           margin-left:200px;
        }
        .btn{
            padding: 5px;
            border-radius: 10px;
            border-color: red;
            color:white;
            background-color: red;
            float: left;
            margin:10px;


        }
        
        #content{
            background-color: #F8E2C8;
            height: 430px;
        }
        th{
            padding:20px;
        }
        td{
            padding:10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div id="header">
        <ul id="nav-bar">
            <li id="nav-item"><h2>Pizza House</h2></li>
            <li id="nav-item"><a href="index.html">Home</a></li>
            <li id="nav-item"><a href="menu.php">Menu</a></li>
            <li id="nav-item"><a href="register.php">Register</a></li>
            <li id="nav-item">Contact</li>
        </ul>
    </div>
    <form method="POST" action="menu.php">
    <div id="content">
        <center>
        <table >
            <tr>
                <center>
                <th colspan="2">Contact Information</th>
                 </center>
            </tr>
            <tr>
                <center>
                <th>Send a Message</th>
                 </center>
            </tr>
            <tr>
            <tr>
                <td>
                    Name<br>
                    <input type="text" name="name" require>
                </td>
                <td rowspan="4">
                    Message<br>
                    <textarea id="text"  name="message" rows="10" cols="45" ></textarea><br>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Email<br>
                    <input type="text" name="email" require>
                </td>
            </tr>
            <tr>
                <td>
                    Phone<br>
                    <input type="text" name="phone" require>
                </td>
        
                
            </tr>
            <tr>
                <td>
               <input type="submit" name="submit" value="SEND" class="btn">
               <input type="reset" name="submit" value="Cancel" class="btn">
    </td>
    </tr>
    </table>
    </center>
    </div>
    </form>
    
    <div id="footer">
             <ul id="nav-bar">
            <li id="nav-item-footer"><a href="index.html">Home</a></li>
            <li id="nav-item-footer"><a href="menu.php">Menu</a></li>
            <li id="nav-item-footer"><a href="register.php">Register</a></li>
            <li id="nav-item-footer">Contact</li>
            <li id="nav-item-footer"><p id="company">Copyright @ 2023 K M H Company</p></li>
        </ul>
    </div>
</body>
</html>