<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include ('server.php'); ?>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery.js"></script>
        <script src="val_jq.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="title">
                    <h1><i><b>REGISTRATION</b></i></h1></div></div>
            <div id="cont">
                <div id="error"></div>
                <form id="myForm">
                    <label>Username<span>*</span></label>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <span class="hidden" id="unerr"></span><br>
                    <label>Password<span>*</span></label>
                    <input type="password" id="pwd_1" name="pwd_1" placeholder="Password">
                    <span class="hidden" id="pwd1err"></span><br>
                    <label>Retype Password<span>*</span></label>
                    <input type="password" id="pwd_2" name="pwd_2" placeholder="Retype Password">
                    <span class="hidden" id="pwd2err"></span><br>          
                    <label>Email-ID<span>*</span></label>
                    <input type="text" id="email" name="email" placeholder="Email_ID">
                    <span class="hidden" id="emailerr"></span><br>
                    <label>Gender<span>*</span></label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <span class="hidden" id="generr"></span><br>
                    <label>Contact Number<span>*</span></label>
                    <input type="text" id="mobNo" name="mobNo" placeholder="Contact no">
                    <span class="hidden" id="moberr"></span><br>
                    <label>Address<span>*</span></label>
                    <input type="text" id="address" name="address" placeholder="Address">
                    <span class="hidden" id="adderr"></span><br>   
                    
                    
                    <div id="sub">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div></div>
        <footer id="foot">
            Copyright &copy; VINOTH &nbsp | Validated By jQuery
        </footer>
    </body>
</html>