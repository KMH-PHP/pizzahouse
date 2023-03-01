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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Menu</title>
</head>
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
    
        td{
            width:700px;
            height: 300px;
        }
        #nav-item-footer{
            display: inline-block;
            padding-right: 50px;
        }
        #company{
           margin-left:200px;
        }
        
            #content{
            background-color: #F8E2C8;
        }
        img{
            width:200px;
            height:200px;
        }
        a{
            text-decoration: none;
        }
    </style>
<body>
<div id="header">
        <ul id="nav-bar">
            <li id="nav-item"><h2>Pizza House</h2></li>
            <li id="nav-item"><a href="index.html">Home</a></li>
            <li id="nav-item">Menu</li>
            <li id="nav-item"><a href="register.php">Register</a></li>
            <li id="nav-item"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div id="content">
        <table>
            <tr>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (1).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (9).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (3).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (4).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
            </tr>
            <tr>
                 <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (5).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (6).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (7).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
                    <td>
                        <center>
                        <div id="p1">
                           <img src="images/p (8).png">
                           <h4>Pizza</h4>
                           <p>5000ks</p>
                           <a href="#">Buy</a>
                        </div>
                        <center>
                    </td>
            </tr>
    </table>
    </div>
    
    <div id="footer">
             <ul id="nav-bar">
            <li id="nav-item-footer"><a href="index.html">Home</a></li>
            <li id="nav-item-footer">Menu</li>
            <li id="nav-item-footer"><a href="register.php">Register</a></li>
            <li id="nav-item-footer"><a href="contact.php">Contact</a></li>
            <li id="nav-item-footer"><p id="company">Copyright @ 2023 K M H Company</p></li>
        </ul>
    </div>
</body>
</html>