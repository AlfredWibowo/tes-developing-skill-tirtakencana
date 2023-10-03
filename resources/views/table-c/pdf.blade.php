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
                <th>Area Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['kode_toko'] }}</td>
                    <td>{{ $item['area_sales'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
