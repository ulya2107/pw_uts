<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Bunga</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1 align="center">Bloom Florist</h1>

<div align="center">

<?php
$data = mysqli_query($conn, "SELECT * FROM produk");

while($d = mysqli_fetch_array($data)){
?>

<div class="card">
    <img src="gambar/<?php echo $d['gambar']; ?>">

    <h3><?php echo $d['nama_produk']; ?></h3>

    <p>Rp <?php echo $d['harga']; ?></p>

    <a href="keranjang.php?id=<?php echo $d['id']; ?>">
        <button>Beli</button>
    </a>
</div>

<?php } ?>

</div>

</body>
</html>