<!DOCTYPE html>
<html>

<head>
    <title>PDF Document</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Toko</th>
                <th>Nominal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['kode_toko'] }}</td>
                    <td>{{ $item['nominal_transaksi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
