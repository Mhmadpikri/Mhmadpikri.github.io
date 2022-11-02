<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h3>Login Akun</h3>
    <form action="" method="post">

        <label for="">Username / Email</label><br>
        <input type="text" name="user"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>
        
        <input type="submit" name="login" value="login">
    </form>

    <p>belum punya akun ?
        <a href="register.php">registrasi</a>
    </p>

</body>
</html>

<?php
    session_start();
    require 'config3.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM member
                WHERE username='$user'
                OR email='$user'";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['username'];

        if(password_verify($password, $row['psw'])){
            $_SESSION['login'] = true;

            echo "<script>
                    alert('SELAMAT DATANG $username');
                    document.location.href = 'index.php';
                    </script>";
        }else{
            echo "<script>
                    alert('PASSWORD YANG ANDA MASUKKAN SALAH');
                    </script>";
        }
    }