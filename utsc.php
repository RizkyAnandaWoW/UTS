<!DOCTYPE html>
<html>
<head>
    <title>UTS C</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }
        .tulis{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>UTS A</h1>
    <h1><p>Nama: Rizky Ananda</p></h1>
    <h1><p>NIM: 701220002</p></h1>
    <h2><p>c. Modifikasi table diatas dengan mengubah array yang ada menjadi array multidimensi yang menyimpan nama produk, stok, dan harga. Setelah itu tampilkan isi array secara terurut menggunakan bantuan table.</p></h2><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php
        $table_harga_barang = array(
            array(
                "ID" => "1",
                "Produk" => "Minyak Telon",
                "Stok" => 25,
                "Harga" => 30000,
                "Jumlah" => "",
            ),
            array(
                "ID" => "2",
                "Produk" => "Diapers",
                "Stok" => 25,
                "Harga" => 51000,
                "Jumlah" => "",
            ),
            array(
                "ID" => "3",
                "Produk" => "Baby Oil",
                "Stok" => 15,
                "Harga" => 16000,
                "Jumlah" => "",
            ),
            array(
                "ID" => "4",
                "Produk" => "Shampo Baby",
                "Stok" => 20,
                "Harga" => 20000,
                "Jumlah" => "",
            ),
            array(
                "ID" => "5",
                "Produk" => "Bedak",
                "Stok" => 15,
                "Harga" => 15000,
                "Jumlah" => "",
            ),
            array(
                "ID" => "6",
                "Produk" => "Baju Bayi",
                "Stok" => 20,
                "Harga" => 35500,
                "Jumlah" => "",
            ),
            array(
                "ID" => "7",
                "Produk" => "Jumper",
                "Stok" => 25,
                "Harga" => 50000,
                "Jumlah" => "",
            ),
        );

        $total_harga_produk = 0;

        // Menampilkan data Harga Barang
        foreach ($table_harga_barang as $barang) {
            echo '<tr>';
            echo '<td>' . $barang['ID'] . '</td>';
            echo '<td>' . $barang['Produk'] . '</td>';
            echo '<td>' . $barang['Stok'] . '</td>';
            echo '<td>' . $barang['Harga'] . '</td>';
            $Jumlah = $barang['Stok'] * $barang['Harga'];
            $total_harga_produk += $Jumlah;
            echo '<td>' . $Jumlah . '</td>';
            echo '</tr>';
        }
        ?>

        <!-- Menampilkan total harga produk -->
        <tr>
            <td colspan="4">Total Harga Produk</td>
            <td><?php echo $total_harga_produk; ?></td>
        </tr>

    </table>
</body>
</html>