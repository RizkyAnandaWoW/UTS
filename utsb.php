<!DOCTYPE html>
<html>
<head>
    <title>UTS B</title>
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
    </style>
</head>
<body>
    <h1>UTS A</h1>
    <h1><p>Nama: Rizky Ananda</p></h1>
    <h1><p>NIM: 701220002</p></h1>
    <h2><p>b. Jika ada pembeli membeli dengan total gembelian 200.000 maka akan dapat diskon 10%, jika ada yang membeli dengan total gembelian 300.000 maka ada dapat diskon 20%</p></h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .kwitansi {
            border: 1px solid #000;
            padding: 10px;
            max-width: 400px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .detail-produk {
            margin-top: 10px;
            font-size: 14px;
        }

        .total {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="kwitansi">
        <div class="header">KWITANSI PEMBELIAN</div>
        <div class="detail-produk">
            <?php
            echo "Tanggal Transaksi : 20 November 2023 <br>";
            echo "Produk :  <br>";
            
            $produk_pembelian = array(
                "Baju Bayi" => 3,
                "Diapers" => 5,
                "Bedak" => 1,
                "Minyak Telon" => 2,
                "Baby Oil" => 3,
            );

            // Harga produk
            $harga_produk = array(
                "Baju Bayi" => 35500,
                "Diapers" => 51000,
                "Bedak" => 15000,
                "Minyak Telon" => 30000,
                "Baby Oil" => 16000,
            );

            // Menghitung total pembelian dan harga setiap produk
            $total_pembelian = 0;
            foreach ($produk_pembelian as $produk => $jumlah) {
                $harga_produk_satuan = $harga_produk[$produk] * $jumlah;
                $total_pembelian += $harga_produk_satuan;
                echo $produk . " (" . $jumlah . "X" . number_format($harga_produk[$produk], 0, ',', '.') . ") = Rp " . number_format($harga_produk_satuan, 0, ',', '.') . "<br>";
            }

            // Inisialisasi diskon dan total pembayaran
            $diskon = 0;
            $total_pembayaran = $total_pembelian;

            // Menghitung diskon berdasarkan total pembelian
            if ($total_pembelian >= 300000) {
                $diskon = 0.2; // Diskon 20%
            } elseif ($total_pembelian >= 200000) {
                $diskon = 0.1; // Diskon 10%
            }

            // Menghitung total pembayaran setelah diskon
            $total_pembayaran -= $total_pembayaran * $diskon;
            ?>
        </div>
        <div class="total">
            Total Pembelian: Rp <?= number_format($total_pembelian, 0, ',', '.') ?><br>
            Diskon: <?= ($diskon * 100) ?>%<br>
            Total Pembayaran setelah Diskon: Rp <?= number_format($total_pembayaran, 0, ',', '.') ?>
        </div>
    </div>
</body>
</html>