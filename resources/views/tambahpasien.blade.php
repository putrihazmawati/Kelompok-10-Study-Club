<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pasien</title>
    <style>
        /* Styles nya Form Input Data Pasien */
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

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input,
select {
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
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>
</head>

<body>
    <form action="{{ route('pasien.store') }}" method="post">
        @csrf
        <h2>Form Input Data Pasien</h2>

        <label for="id">ID Pasien:</label>
        <input type="text" id="id" name="id" required>

        <label for="kategori">Kategori Pasien:</label>
        <select id="kategori" name="kategori" required>
            <option value="ibu_hamil">Ibu Hamil</option>
            <option value="bayi">Bayi</option>
            <option value="balita">Balita</option>
        </select>

        <label for="nama">Nama Pasien:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="usia">Usia Pasien:</label>
        <input type="text" id="usia" name="usia" required>

        <label for="alamat">Alamat Pasien:</label>
        <input type="text" id="alamat" name="alamat" required>

        
        <button type="back-button" onclick="window.location.href='http://127.0.0.1:8000/petugas'">Kembali</button>
        <button type="submit">Simpan Data</button>
    </form>
        
</body>

</html>
