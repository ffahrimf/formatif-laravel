<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dosen Data</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Jabatan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tdosen as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>