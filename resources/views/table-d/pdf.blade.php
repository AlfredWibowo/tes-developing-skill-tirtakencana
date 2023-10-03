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
                <th>Kode Sales</th>
                <th>Nama Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['kode_sales'] }}</td>
                    <td>{{ $item['nama_sales'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
