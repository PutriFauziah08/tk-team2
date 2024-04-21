<?php
include 'connect.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/script.js">

    <style>
        body, html {
            height: 100%;
        }

        body {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <div class="container-login">
        <div class="image">
			<img src="images/img_login.png" class="img-responsive">
		</div>
        <div class="form">
            <form action="" method="POST">
                <h3>Login</h3>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Login</button>
                </div>
                <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>