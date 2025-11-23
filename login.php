<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Pelita Cahaya Abadi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="index.php"><img class="kucing"src="foto/back.png" alt=""></a>
     <div class="left">
    <img src="foto/logo pelita.png" alt="Logo Pelita Cahaya Abadi">
    <h1>PELITA CAHAYA ABADI</h1>
    <p>KALIMANTAN BARAT KOTA PONTIANAK</p>
  </div>

  <div class="right">
    <div class="login-box">
      <h2>Login</h2>
      <form method="POST" action="UTS-PWL/php/login.php">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password">

        <a href="#" class="forgot">Forgot password?</a>

        <button type="submit" class="tombol" name="login">Login</button>

        <div class="signup">
          Don’t have an account? <a href="pendaftaran.php">Sign Up</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
