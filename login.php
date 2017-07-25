<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="title">
                    <h1><i><b>LOGIN</b></i></h1></div></div>
            <div id="cont">
                <div id="error"></div>
                <form method="post" action="server.php">
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Username"><br>
                    <label>Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password"><br>                
                    <div id="sub">
                        <input type="submit" value="Sign In" name="login"><br>
                        Not a Member? <a href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>