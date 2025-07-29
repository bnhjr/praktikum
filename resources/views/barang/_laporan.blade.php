<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
            font-family: 'Trebuchet MS', sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #87CEEB;
            }
        </style>
    </head>
<body>

<h2 style="text-align: center">LAPORAN DATA BARANG</h2>

<table>
  <tr align="center">
    <th>No.</th>
    <th>Nama Barang</th>
    <th>Merk</th>
    <th>Tipe</th>
    <th>Satuan</th>
  </tr>
@foreach ( $barang as $brg)
    <tr>
        <td align="center">{{ $brg->id }}</td>
        <td>{{ $brg->nama_barang }}</td>
        <td>{{ $brg->merk }}</td>
        <td>{{ $brg->tipe }}</td>
        <td>{{ $brg->satuan }}</td>
    </tr>
@endforeach

</table>

</body>
</html>

