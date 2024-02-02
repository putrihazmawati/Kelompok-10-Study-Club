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

        /* tombol kembali */
        .back-button {
            display: inline-block;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            
            
        }

        .back-button:hover {
            background-color: #555;

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
                    <th>Nama Pengguna</th>
                    
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

    <a align: 'center' href="{{ route('dashboard') }}" class="back-button">Kembali ke Dashboard</a>
    

</body>
</html>
