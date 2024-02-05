<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        /* tombol */
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
    <h2>Data Pasien</h2>

    @if(count($pasien) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Detail</th>
                    <th>Perbarui</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasien as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->kategori }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->usia }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <form action="{{ route('pasien.show', $data->id) }}" method="get">
                                <button type="submit">DETAIL</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('pasien.edit', $data->id) }}" method="get">
                                <button type="submit">EDIT</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('pasien.destroy', $data->id) }}" method="post">
                                @csrf @method('delete')
                                <button type="submit">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="button" onclick="window.location.href='{{ route('pasien.create') }}'">Tambah Data Pasien</button>
        <button type="button" onclick="window.location.href='{{ route('dashboard') }}'">Dashboard</button>
    @else
        <p>Tidak ada data pasien.</p>
    @endif
</body>

</html>
