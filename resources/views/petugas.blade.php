<!DOCTYPE html>
<html>
<head>
    <title>Daftar Petugas</title>
    
      <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            text-align: center;
            color: #888;
        }
        /* tombol */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

    <h1>Daftar Petugas</h1>

    @if(count($petugas) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Pengguna Petugas Harian</th>
 
                </tr>
            </thead>
            <tbody>
                @foreach($petugas as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_pengguna }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada petugas yang tersedia.</p>
    @endif
    <div class="button-container">
    <button type="back-button" onclick="window.location.href='http://127.0.0.1:8000/petugas/create'">Kembali</button>
    <button type="back-button" onclick="window.location.href='http://127.0.0.1:8000/pasien/create'">Tambah Data Pasien</button>
    </div>
    

</body>
</html>
