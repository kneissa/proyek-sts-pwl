<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register - Pelita Cahaya Abadi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="pendaftaran.php"><img class="kucing" src="foto/back.png" alt=""></a>
  <div class="left">
    <img src="foto/logo pelita.png" alt="Logo Pelita Cahaya Abadi">
    <h1>PELITA CAHAYA ABADI</h1>
    <p>KALIMANTAN BARAT KOTA PONTIANAK</p>
  </div>

  <div class="right">
    <div class="login-box">
      <h2>Register</h2>
      <form method="POST" action="UTS-PWL/php/register.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      
        <label for="password">Konfirmasi Password</label>
        <input type="password" name="confirm" placeholder="Konfirmasi kata sandi" required>

        <button type="submit" class="tombol" name="register">Register</button>

        <div class="signup">
          Already have an account? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>