<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza House</title>
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
            width:70px;
            height: 30px;
        }
        th{
            height: 40px;
        }
        
        #nav-item-footer{
            display: inline-block;
            padding-right: 50px;
        }
        #company{
           margin-left:200px;
        }
        .btn{
            padding: 7px;
            border-radius: 10px;
            border-color: red;
            color:white;
            background-color: red;

        }
        #content{
            background-color: #F8E2C8;
            height: 400px;
        }
        img{
            width:400px;
            height:400px;

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
            <li id="nav-item-footer"><a href="index.html">Home</li>
            <li id="nav-item-footer"><a href="menu.php">Menu</a></li>
            <li id="nav-item-footer">Register</a></li>
            <li id="nav-item"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div id="content">
        <center>
            <form method="POST" action="contact.php">
                

                <table border="0">
                    <tr>
                        <th>Register Form</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="name" id="name" placeholder="Name">
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <input type="text" name="email" id="email" placeholder="Email">
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <input type="text" name="phone" id="phone" placeholder="Phone">
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <input type="text" name="password" id="password" placeholder="Password">
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <input type="text" name="city" id="city" placeholder="City">
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <input type="text" name="country" id="country" placeholder="Country">
                        </td>
                     </tr>
                     <tr>
                        <td>

                        <input type="submit" name="submit" value="Register" class="btn">
                        <input type="reset" name="reset" value="Cancel" class="btn">
                        </td>
    </tr>
                </table>
            </form>
        </center>
    </div>
    
    <div id="footer">
             <ul id="nav-bar">
            <li id="nav-item-footer"><a href="index.html">Home</li>
            <li id="nav-item-footer"><a href="menu.php">Menu</a></li>
            <li id="nav-item-footer">Register</a></li>
            <li id="nav-item-footer"><a href="contact.php">Contact</a></li>
            <li id="nav-item-footer"><p id="company">Copyright @ 2023 K M H Company</p></li>
        </ul>
    </div>
</body>
</html>