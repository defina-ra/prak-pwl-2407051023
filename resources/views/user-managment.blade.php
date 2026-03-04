<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            color: #f1f1f1;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        th {
            background-color: #667eea;
            color: white;
            padding: 15px;
            text-transform: uppercase;
            font-size: 14px;
        }

        td {
            padding: 12px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e7ff;
            transition: 0.3s;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>

   <h1>User Management</h1>
   <p>Ini adalah halaman user management</p>

    <table>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Prodi</th>
        </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user['nama'] }}</td>
            <td>{{ $user['npm'] }}</td>
            <td>{{ $user['jurusan'] }}</td>
            <td>{{ $user['prodi'] }}</td>
        </tr>
    @endforeach

    </table>

</body>
</html>