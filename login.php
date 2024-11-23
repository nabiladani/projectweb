<?php
include_once 'model/User.php';
session_start();
$user = new User();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_data = $user->login($username, $password);
    if ($user_data) {
        $_SESSION['user'] = $user_data;

        header('Location: index.php');
    } else {
        echo "Login gagal! Username atau password salah.";
    }
}
?>
<form method="POST" action="">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <button type="submit" name="login">Login</button>
</form>