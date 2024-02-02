<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px; /* Menyesuaikan panjang tombol*/
            width: 100%; /* Mengisi lebar sesuai parent*/
            border: none;
            border-radius: 5px;
            margin-bottom: 15px; /* Memberikan jarak antara tombol dengan elemen di atasnya*/
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            color: green;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="{{ route('petugas.store') }}" method="post">
        @csrf

        <h1>Registrasi Petugas</h1>

        <label for="nama_pengguna">Nama Pengguna:</label>
        <input type="text" id="nama_pengguna" name="nama_pengguna" required>

        <label for="pw">Password:</label>
        <input type="password" id="pw" name="pw" required>

        <button type="submit">Registrasi</button>

        <button type="button" onclick="window.location.href='http://127.0.0.1:8000/dashboard'">Kembali</button>
    </form>
</body>

</html>
