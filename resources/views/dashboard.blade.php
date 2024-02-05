<!DOCTYPE html>
<html>

<head>
    <title>Posyandu Harapan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .register-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>POSYANDU HARAPAN</h1>
        <p>Pencatatan Terhadap Perubahan Perilaku, Keadaan Gizi dan Kesehatan Keluarga <3</p>

        <div class="button-container">
            <button class="register-button" onclick="redirectToRegistration()">Registrasi</button>
        </div>
    </div>

   <script>
        function redirectToRegistration() {
            // URL sesuai registrasi petugas posyandu
            window.location.href = "http://127.0.0.1:8000/petugas/create";
        }
    </script>
</body>

</html>