<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Bebas - Multimedia</title>
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

<div style="width: 80%; margin: 0 auto; font-family: Arial, sans-serif; text-align: center;">
    <h2>Menu Bebas: Fitur Multimedia</h2>
    <p>Halaman ini memuat elemen Audio (Music) dan Video</p>
    <br><br>

    <h3 style="font-size: 16px; font-weight: bold;">1. Musik (Audio)</h3>
    <audio controls style="margin-bottom: 30px;">
        <source src="sound.mp3" type="audio/mpeg">
    </audio>
    
    <br>

    <h3 style="font-size: 16px; font-weight: bold;">2. Video</h3>
    <video width="480" height="270" controls style="max-width: 100%; border: 2px solid #87cefa; border-radius: 5px;">
        <source src="vidio.mp4" type="video/mp4">
    </video>
</div>

</body>
</html>