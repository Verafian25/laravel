<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{$item->nama_barang}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->stok}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>