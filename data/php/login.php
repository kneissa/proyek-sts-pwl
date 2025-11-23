<?php
require_once 'config/database.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qAdmin = "SELECT * FROM users WHERE username = ?";
    $stmt = $connection->prepare($qAdmin);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $admin = $stmt->get_result()->fetch_assoc();

    if ($admin) {
    if ($password === $admin['password']) {
        $_SESSION['username'] = $admin['username'];
        $_SESSION['role'] = 'admin';
        $_SESSION['loggedin'] = true;
        header("Location: ../../admin.php");
        exit;
    }
    }

    $qUser = "SELECT * FROM `akun sekolah` WHERE username = ?";
    $stmt = $connection->prepare($qUser);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = 'user';
            $_SESSION['loggedin'] = true;
            header("Location: ../../index.php");
            exit;
        }
    }

    echo "<script>
            alert('Username atau password salah');
            window.location.href='../../login.php';
          </script>";
}
?>
