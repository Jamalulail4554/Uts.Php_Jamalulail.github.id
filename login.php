<?php
session_start();
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "admin";

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        $error = "Login Berhasil.";
        $error = "Username/Password Tidak Sesuai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="">
            <div class="textbox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="submit" class="btn" value="Login">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</body>
</html>
