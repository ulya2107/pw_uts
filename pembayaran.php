<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$metode = $_POST['metode_pembayaran'];

mysqli_query($conn, "INSERT INTO pesanan VALUES('', '$nama', '$alamat', '$metode')");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
    <h2>Pembayaran Berhasil</h2>

    <p>Terima kasih sudah memesan bunga.</p>

    <a href="index.php">
        <button>Kembali ke Home</button>
    </a>
</div>

</body>
</html>