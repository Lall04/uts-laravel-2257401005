<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman awal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: red;
            padding: 0px;
        }

        form {
            display: justify;
            flex-direction: column;
            gap: 10px;
            margin: 20px 0;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #ff194d;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: red;
        }

        .btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: maroon;
        }

        p{
            color:white;
        }
    </style>
</head>
<body>
    <h1>Mau Login Atau Daftar Ni?</h1>
    <form action="/login" method="GET">
    <a href="/login" class="btn">Login</a>
    <a href="/register" class="btn">Daftar</a>
    </form>
    <p>Created by Ahmad bilal,2257401005,MI22B</p>
</body>
</html>