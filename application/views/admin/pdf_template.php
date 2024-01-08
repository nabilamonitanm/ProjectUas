<!DOCTYPE html>
<html>
<head>
    <title>Data Pemesanan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Kwitansi Pembelian Minerall Village</h2>
    <table border="1">
    <tr>
        <th style="text-align: center;">Atas Nama</th>
        <th style="text-align: center;">No. Hanphone</th>
        <th style="text-align: center;">Alamat Lengkap</th>
        <th style="text-align: center;">Jumlah Pesanan</th>
        <th style="text-align: center;">Total Harga</th>
    </tr>
    <?php foreach ($tagihan_data as $item) : ?>
        <tr>
            <td style="border: 1px solid #000; text-align: center; "><?php echo $item->namalengkap; ?></td>
            <td style="border: 1px solid #000; text-align: center; "><?php echo $item->no_telp; ?></td>
            <td style="border: 1px solid #000; text-align: center; "><?php echo $item->alamat_lengkap; ?></td>
            <td style="border: 1px solid #000; text-align: center; "><?php echo $item->jumlah_pemesanan; ?> Liter</td>
            <td style="border: 1px solid #000; padding: 20px;"><?= 'Rp ' . number_format($item->total_harga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td style="border: 1px solid #000; border: 1px solid #000; text-align: center;"><b>TOTAL PEMBAYARAN</b></td>
            <td style="border: 1px solid #000; padding: 20px;"><?= 'Rp ' . number_format($item->total_harga, 0, ',', '.'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
