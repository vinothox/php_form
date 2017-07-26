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
        <script src="jquery.js"></script>
        <script src="val_jq.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #picbt{
                width: 10%;
                background-color: goldenrod;
                color: black;
                /*padding: 14px 20px;*/
                margin: 8px 0;
                border: none;
                padding-left: 20px;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="title">
                    <h1><i><b>REGISTRATION</b></i></h1></div></div>
            <div id="cont">
                <div id="error"></div>
                <form method="post" action="pic.php" enctype="multipart/form-data">
                    <label>Select image to upload:</label>
                    <input type="file" name="photo" id="photo">
                    <input type="submit" value="upload" name="Upload" id="picbt">
                </form>
                <form method="post" action="server.php">
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <span class="hidden" id="unerr"></span><br>
                    <label>Password</label>
                    <input type="password" id="pwd_1" name="pwd_1" placeholder="Password">
                    <span class="hidden" id="pwd1err"></span><br>
                    <label>Retype Password</label>
                    <input type="password" id="pwd_2" name="pwd_2" placeholder="Retype Password">
                    <span class="hidden" id="pwd2err"></span><br>         
                    <label>Email-ID</label>
                    <input type="text" id="email" name="email" placeholder="Email_ID">
                    <span class="hidden" id="emailerr"></span><br>
                    <label>Date of Birth</label>
                    <input type="date" id="dob" name="dob"><br>
                    <label>Gender</label>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <span class="hidden" id="generr"></span><br>
                    <label>Contact Number</label>
                    <input type="text" id="mobNo" name="mobNo" placeholder="Contact no">
                    <span class="hidden" id="moberr"></span><br>
                    <label>City</label>
                    <input type="text" id="city" name="city" placeholder="City">
                    <div id="sub">
                        <input type="submit" value="Register" name="register"><?php echo $error; ?><br>
                        Already a Member? <a href="login.php">Sign In</a>
                    </div>
                </form>
            </div></div>
        <footer id="foot">
            Copyright &copy; VINOTH &nbsp | ALL RIGHTS RESERVED
        </footer>
    </body>
</html>