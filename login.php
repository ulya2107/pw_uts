<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body{
            font-family:Arial;
            background:#ffe6f0;
        }

        .login{
            width:350px;
            background:white;
            padding:40px;
            margin:100px auto;
            border-radius:20px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            color:hotpink;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:15px;
        }

        button{
            width:100%;
            padding:12px;
            margin-top:20px;
            background:hotpink;
            color:white;
            border:none;
        }
    </style>
</head>

<body>

<div class="login">

    <h2>Login</h2>

    <form>

        <input type="text" placeholder="Username">

        <input type="password" placeholder="Password">

        <button>Login</button>

    </form>

</div>

</body>
</html>