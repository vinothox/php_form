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
        <script src="jq_sam.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="title">
                    <h1><i><b>LOGIN</b></i></h1></div></div>
            <div id="cont">
                <div id="error"></div>
                <form id="myForm" onsubmit="">
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <span class="hidden" id="fnerr"></span><br>
                    <label>Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password">
                    <span class="hidden" id="lnerr"></span><br>                
                    <div id="sub">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div></div>
    </body>
</html>