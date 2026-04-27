<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Warung Pintar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>🛒 Warung Pintar</h2>

<a href="tambah.php" class="btn">+ Tambah Produk</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php
    $no = 1;
    $data = mysqli_query($conn, "SELECT * FROM produk");

    while($row = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td>Rp <?= number_format($row['harga']); ?></td>
        <td><?= $row['stok']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>