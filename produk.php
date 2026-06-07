<?php include 'koneksi.php'; ?>
<html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk Jasa - UAS Pemrograman WEB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a href="index.php">HOME</a>
    <a href="admin_produk.php">PRODUK</a>
    <a href="profil.php">PROFILE PERUSAHAAN</a>
    <a href="menu_bebas.php">MENU BEBAS</a>
    <a href="login.php">LOGIN</a>
</nav>

<div class="line-separator"></div>

<div style="width: 80%; margin: 0 auto; font-family: Arial, sans-serif;">
    <h2 style="text-align: center;">Daftar Jasa & Layanan Bisnis</h2>
    <br>

    <?php
    $query = "SELECT * FROM admin_jasa";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div style="border: 1px solid #87cefa; padding: 20px; margin-bottom: 20px; border-radius: 5px; background-color: #f9fbfd;">
                <h3 style="margin-top: 0; color: #0056b3;"><?php echo htmlspecialchars($row['nama_jasa']); ?></h3>
                <p style="color: #333;"><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                <p style="font-weight: bold; color: #000;">Harga: <?php echo htmlspecialchars($row['harga']); ?></p>
            </div>
            <?php
        }
    } else {
        echo "<p style='text-align:center; color:red;'>Belum ada data jasa di database.</p>";
    }
    ?>
</div>

</body>
</html>