<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Toko Baru</th>
                <th>Kode Toko Lama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['kode_toko_baru'] }}</td>
                    <td>{{ $item['kode_toko_lama'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
