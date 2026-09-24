<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Laptop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        h2 {
            text-align: center;
            color: #800000;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #800000;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #800000;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9e6e6;
        }
    </style>
</head>
<body>

<h2>DAFTAR PRODUK LAPTOP</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
    </tr>

    <?php
    $produk = [
        ["ASUS Vivobook 14", 9509000],
        ["Lenovo IdeaPad Slim 3", 10875000],
        ["Acer Aspire Lite 14", 8849000],
        ["HP 14", 9749000],
        ["Infinix XBOOK 15", 8199000],
        ["Axioo Hype 5", 8799000],
        ["MSI Modern 14", 9383000],
        ["ASUS Vivobook S14", 16999000],
        ["Lenovo LOQ 15", 14999000],
        ["MacBook Air 13", 23699000]
    ];

    $no = 1;

    foreach ($produk as $item) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $item[0] . "</td>";
        echo "<td>Rp " . number_format($item[1], 0, ',', '.') . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>