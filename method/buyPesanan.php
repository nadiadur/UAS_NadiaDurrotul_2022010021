<?php
session_start();
require("../admin1/config/dbcon.php");


$totalBayar = $_POST['totalBayar'];
$totalBelanja = $_POST['totalBelanja'];
$datePesanan = date("Y-m-d");

// simpan data
$query = mysqli_query($con, "INSERT INTO pemesanan (tanggal_pemesan, total_harga, total_bayar)
                            VALUES
                        ('$datePesanan', '$totalBelanja' ,'$totalBayar')");
// ambil id yang baru
$id_pemesan = $con->insert_id;

// simpan data ke detailpesanan
foreach ($_SESSION['pemesanan'] as $id_produk => $jumlah) {
    $queryDetail = mysqli_query($con, "INSERT INTO detail_pemesan (id_pemesan, id_produk, jumlah_produk)
                            VALUES ('$id_pemesan','$id_produk', '$jumlah')");
}

// Mengosongkan pesanan
unset($_SESSION["pemesanan"]);

// Dialihkan ke halaman nota
echo json_encode([
    'response' => 'True'
]);
?>
