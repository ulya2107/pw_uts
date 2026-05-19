<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bloom Florist</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#fff0f5;
        }

        /* Navbar */
        nav{
            background:white;
            padding:20px 50px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
            position:sticky;
            top:0;
        }

        nav h1{
            color:hotpink;
            font-size:32px;
        }

        nav .menu a{
            text-decoration:none;
            margin-left:20px;
            color:#333;
            font-weight:bold;
        }

        nav .menu a:hover{
            color:hotpink;
        }

        /* Hero */
        .hero{
            height:500px;
            background:url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?q=80&w=1200&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            color:white;
        }

        .hero-text{
            background:rgba(0,0,0,0.5);
            padding:40px;
            border-radius:20px;
        }

        .hero-text h2{
            font-size:50px;
            margin-bottom:15px;
        }

        .hero-text p{
            font-size:18px;
            margin-bottom:20px;
        }

        .hero-text a{
            background:hotpink;
            padding:12px 25px;
            color:white;
            text-decoration:none;
            border-radius:30px;
        }

        /* Produk */
        .produk{
            padding:60px;
            text-align:center;
        }

        .produk h2{
            font-size:40px;
            margin-bottom:40px;
            color:hotpink;
        }

        .container{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            gap:30px;
        }

        .card{
            width:280px;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .card-body{
            padding:20px;
        }

        .card-body h3{
            margin-bottom:10px;
        }

        .harga{
            color:hotpink;
            font-size:20px;
            font-weight:bold;
            margin-bottom:15px;
        }

        .btn{
            display:inline-block;
            padding:10px 20px;
            background:hotpink;
            color:white;
            text-decoration:none;
            border-radius:25px;
        }

        footer{
            background:hotpink;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav>
    <h1>Bloom Florist</h1>

    <div class="menu">
        <a href="">Home</a>
        <a href="">Produk</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <div class="hero-text">
        <h2>Fleuriette</h2>

        <p>
            Mimpi Kecil Yang Hangat di Tiap Kelopaknya.
        </p>

        <a href="#produk">Belanja Sekarang</a>
    </div>
</section>

<!-- Produk -->
<section class="produk" id="produk">

    <h2>Produk Kami</h2>

    <div class="container">

        <?php
        $data = mysqli_query($conn, "SELECT * FROM produk");

        while($d = mysqli_fetch_array($data)){
        ?>

        <div class="card">

            <img src="gambar/<?php echo $d['gambar']; ?>">

            <div class="card-body">

                <h3><?php echo $d['nama_produk']; ?></h3>

                <div class="harga">
                    Rp <?php echo number_format($d['harga']); ?>
                </div>

                <a class="btn" href="keranjang.php?id=<?php echo $d['id']; ?>">
                    Beli
                </a>

            </div>
        </div>

        <?php } ?>

    </div>

</section>

<!-- Footer -->
<footer>
    <p>© 2026 Bloom Florist | Toko Bunga Modern</p>
</footer>

</body>
</html>