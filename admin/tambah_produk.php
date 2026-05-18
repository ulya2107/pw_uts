<?php
include '../koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, '../gambar/'.$gambar);

    mysqli_query($conn, "INSERT INTO produk VALUES('', '$nama', '$harga', '$gambar')");

    echo "Produk berhasil ditambah";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="nama_produk" placeholder="Nama Produk">

    <input type="number" name="harga" placeholder="Harga">

    <input type="file" name="gambar">

    <button type="submit" name="submit">Tambah</button>

</form>

</body>
</html>