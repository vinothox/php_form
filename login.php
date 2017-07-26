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
                <?php
                if (isset($_POST['login'])) {
                    $db = mysqli_connect('localhost', 'root', 'admin@123', 'account');
                    $uname = $_POST['username'];
                    $pwd1 = md5($_POST['pwd']);
                    $query = "SELECT * FROM users WHERE username='$uname' AND password='$pwd1'";
                    $results = mysqli_query($db, $query);

                    if (mysqli_num_rows($results) == 1) {
                        session_start();
                        $_SESSION['username'] = $uname;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: account.php');
                    } else {
                        $error= "Wrong username/password combination";
                    }
                }
                ?>
                <center><span id="errmsg"><?php echo $error;?></span></center>
                <form method="post" action="login.php">       
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" required=""><br>
                    <label>Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" required=""><br>                
                    <div id="sub">
                        <input type="submit" value="Sign In" name="login"><br>
                        Not a Member? <a href="register.php">Register</a>      
                    </div>
                </form>
                <a href="index.php"><input type="submit" id="home_bt" value="HOME"></a>
            </div>
        </div>
    </body>
</html>