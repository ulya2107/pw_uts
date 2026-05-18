<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
    <h2>Checkout</h2>

    <form action="pembayaran.php" method="POST">

        <input type="text" name="nama" placeholder="Nama" required>

        <textarea name="alamat" placeholder="Alamat"></textarea>

        <select name="metode_pembayaran">
            <option>Transfer Bank</option>
            <option>DANA</option>
            <option>OVO</option>
            <option>COD</option>
        </select>

        <button type="submit">Bayar</button>

    </form>
</div>

</body>
</html>