<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <img src="../taxiafriza/gambar/logo.png" alt="Logo" class="logo">
  <div class="login-container">
    <h2>Masuk ke Akun Anda</h2>
    <form action="#" method="post">
      <div class="input-group">
        <label for="email" style="text-align: left;">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password" style="text-align: left;">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <a href="beranda.php">
          <input type="button" value="Masuk" class="btn">
        </a>
        <div class="forgot-password">
          <a href="#">Lupa kata sandi?</a>
        </div>
    </form>
  </div>
</body>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url(../taxiafriza/gambar/background.png);
    background-size: 100%;
  }

  .logo {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 160px;
  }

  .login-container {
    width: 400px;
    margin: 100px auto;
    padding: 40px;
    background-color: #f2f2f2;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .input-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  .btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #0056b3;
  }

  .forgot-password a {
    color: #007bff;
    text-decoration: none;
  }

  .forgot-password a:hover {
    text-decoration: underline;
  }
</style>

</html>