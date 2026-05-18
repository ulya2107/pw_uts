<?php
include 'koneksi.php';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
    <h2>Register</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register">Register</button>
    </form>
</div>

</body>
</html>