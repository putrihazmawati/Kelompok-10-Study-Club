<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        div {
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

        p {
            margin-bottom: 10px;
        }

        input {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input:hover {
            background-color: #45a049;
        }

        input {
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <h1>Detail Pasien</h1>

    <div>
        <p><b>ID Pasien:</b> {{$pasien->id}}</p>
        <p><b>Kategori:</b> {{$pasien->kategori}}</p>
        <p><b>Nama Pasien:</b> {{$pasien->nama}}</p>
        <p><b>Usia:</b> {{$pasien->usia}}</p>
        <p><b>Alamat:</b> {{$pasien->alamat}}</p>
    </div>

    <input type="button" onclick="window.location.href='http://127.0.0.1:8000/pasien'" value="Kembali">
</body>

</html>
