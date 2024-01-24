<?php

require("config/dbcon.php");
$id_pemesan = $_GET['id_pemesan'];
$result = query("SELECT * FROM detail_pemesan 
               INNER JOIN posts ON detail_pemesan.id_produk = posts.id_produk
               INNER JOIN users ON detail_pemesan.username = users.username
               INNER JOIN pemesan ON detail_pemesan.id_pemesan = pemesan.id_pemesan
               WHERE detail_pemesan.id_pemesan = '$id_pemesan'");

foreach ($result as $row) {
    $nama_lengkap = $row['nama_lengkap'];
    $id_pemesan = $row['id_pemesan'];
    $tanggal_pesanan = $row['tanggal_pemesan'];
    $totalBayar = $row['total_bayar'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<script>
    window.print();
</script>

<body>
    <div class="container mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-3">
                <h1>Innisfree <span class="fw-bold text-primary">Skincare</span></h1>
                <table>
                    <tr>
                        <td>Admin</td>
                        <td> : </td>
                        <td>Nadia</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jepara </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table>
                    <tr>
                        <td>Nama Customer</td>
                        <td> : </td>
                        <td><?= $nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesanan </td>
                        <td>: </td>
                        <td><?= $tanggal_pesanan ?></td>
                    </tr>
                    <tr>
                        <td>No Pesanan </td>
                        <td>: </td>
                        <td><?= $id_pemesan ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-7">
                <p class="text-center">----------------------------------------------------------------------------------------------------</p>
                <table class="table table-bordered" id="example">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Subharga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $posts) : ?>
                            <tr>
                                <td><?= $posts['name']; ?></td>
                                <td>Rp. <?= number_format($posts['meta_keyword'], 2, ",", ".") ?></td>
                                <td><?= $posts['jumlah_produk']; ?></td>
                                <td>Rp. <?= number_format($posts['jumlah_produk'] * $posts['meta_keyword'], 2, ",", ".") ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Belanja</th>
                            <th colspan="2">Rp. <?= number_format($posts['total_harga'], 2, ",", ".") ?></th>
                        </tr>
                    </tfoot>
                </table>
                <p class="text-center">----------------------------------------------------------------------------------------------------</p>
                <p class="mt-4">Total bayar : Rp. <?= number_format($totalBayar, 2, ",", ".") ?></p>
                <p>Kembalian : RP. <?= number_format($totalBayar - $posts['total_harga'], 2, ",", ".") ?></p>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5" style="line-height: 1.3px;">
                        <p>------------------------------------------</p>
                        <p>Terima kasih atas Kunjungan anda</p>
                        <p>jangan lupa datang kembali</p>
                        <p class="fw-bold text-danger">Note : Barang yang sudah di beli </p>
                        <p class="fw-bold text-danger">tidak dapat ditukarkan kembali</p>
                        <p>------------------------------------------</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>