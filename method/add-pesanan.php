<?php
session_start();

    $id_produk = $_POST["productId"];
    $jumlah_pesanan = $_POST["productCount"];
    
    if (isset($_SESSION['pemesanan'][$id_produk])) {
        $_SESSION['pemesanan'][$id_produk] += $jumlah_pesanan;
    } else {
        $_SESSION['pemesanan'][$id_produk] = $jumlah_pesanan;
    }
    echo json_encode([
        'response' => 'True'
    ]);

?>
