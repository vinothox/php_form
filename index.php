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
        <div id="main1">
            <div id="header">
                <div id="title">
                    <h1><i><b>WELCOME</b></i></h1></div></div>
            <div id="btns">
                <a href="login.php"><input type="submit" id="sign_bt" value="Sign In"></a>
                <a href="register.php"><input type="submit" id="reg_bt" value="Register"></a>
            </div>
            <div id="tb">
                <h2>Our Registered Users</h2>
            <?php
            $db = mysqli_connect('localhost', 'root', 'admin@123', 'account');
            $query = "SELECT username,email,city,pic FROM users";
            $result = mysqli_query($db, $query);

            echo "<table border='1' width='100%' border-collapse='collapse'>
                <tr>
                <th>Profile Picture</th>
                <th>Username</th>
                <th>Email</th>
                <th>City</th>
                </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><img src='".$row['pic']."' /></td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";   
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($db);
            ?>
        </div>
        </div>
    </body>
</html>