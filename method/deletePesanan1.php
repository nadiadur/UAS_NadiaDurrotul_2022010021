<?php 
session_start();
 
$id_produk = $_POST["productId"];

unset($_SESSION["pemesanan"][$id_produk]);

echo json_encode([
    'response' => 'True'
]);
?>