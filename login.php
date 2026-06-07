<?php
include 'koneksi.php';
session_start();

if (isset($_POST['submit_login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['user']);
    $password = mysqli_real_escape_string($koneksi, $_POST['pass']);

    $query = "SELECT * FROM user_admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $_SESSION['admin_masuk'] = true;
        
        echo "<script>
                alert('Login Berhasil! Selamat Datang di Halaman Admin.');
                window.location.href = 'admin_frame.php';
              </script>";
    } else {
        
        echo "<script>
                alert('Username atau Password Salah!');
                window.location.href = 'login.php';
              </script>";
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a href="index.php">HOME</a>
    <a href="produk.php">PRODUK</a>
    <a href="profil.php">PROFILE PERUSAHAAN</a>
    <a href="menu_bebas.php">MENU BEBAS</a>
    <a href="login.php">LOGIN</a>
</nav>

<div class="line-separator"></div>

<div style="width: 300px; margin: 60px auto; padding: 25px; border: 1px solid #ccc; border-radius: 5px; font-family: Arial, sans-serif; box-shadow: 0 0 10px #eee;">
    <h3 style="text-align: center; margin-top: 0; margin-bottom: 20px;">Login Admin</h3>
    
    <form action="" method="POST">
        <label style="font-size: 14px;">Username:</label><br>
        <input type="text" name="user" placeholder="Masukkan username" required style="width: 100%; padding: 8px; margin: 8px 0 15px 0; box-sizing: border-box;"><br>
        
        <label style="font-size: 14px;">Password:</label><br>
        <input type="password" name="pass" placeholder="Masukkan password" required style="width: 100%; padding: 8px; margin: 8px 0 20px 0; box-sizing: border-box;"><br>
        
        <input type="submit" name="submit_login" value="LOGIN" style="width: 100%; padding: 10px; background-color: #87cefa; border: none; font-weight: bold; cursor: pointer;">
    </form>
</div>

</body>
</html>