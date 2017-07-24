    <?php

    $error;

    if (isset($_POST['register'])) {
        $db = mysqli_connect('localhost', 'root', 'admin@123', 'account');
        $username = $_POST['username'];
        $pwd = $_POST['pwd_1'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $mobNo = $_POST['mobNo'];
        $city = $_POST['city'];
        if((empty($username)) && (empty($pwd)) && (empty($email)) && (empty($dob)) && (empty($gender)) && (empty($mobNo)) && (empty($city))) {
            echo $error="All fields are mandatory";
          } else { 
        //$pwd= md5($pwd);
        $sql = "INSERT INTO users (username, password, email, dob, gender, contact, city) VALUES ('$username', '$pwd', '$email', '$dob', '$gender', '$mobNo', '$city')";
        mysqli_query($db, $sql);
          } 
    }
    ?>