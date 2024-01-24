<?php
session_start();
include("./admin1/config/dbcon.php");

include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Product Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="templatenav/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="templatenav/assets/img/favicon.ico">

    <link rel="stylesheet" href="templatenav/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="templatenav/assets/css/templatem.css">
    <link rel="stylesheet" href="templatenav/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="templatenav/assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="templatenav/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="templatenav/assets/css/slick-theme.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="text-center mx-auto mb-3" style="max-width: 700px;margin-top:5em">
            <h1 class="display-4">Keranjang Anda</h1>
        </div>
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalBelanja = 0; ?>
                        <?php if (isset($_SESSION['pemesanan'])): ?>
                            <?php if (!empty($_SESSION['pemesanan'])): ?>
                                <?php foreach ($_SESSION['pemesanan'] as $id_produk => $jumlah): ?>
                                    <?php

                                    $result = mysqli_query($con, "SELECT * FROM posts WHERE id_produk = '$id_produk'");
                                    $rows = $result->fetch_assoc();
                                    $subHarga = $rows['meta_keyword'] * $jumlah;
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <img src="uploads/posts/<?= $rows['image']; ?>"
                                                    class="img-fluid me-5 rounded-circle"
                                                    style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                            </div>
                                        </th>
                                        <td>
                                            <p class="mb-0 mt-4">
                                                <?= $rows['name'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="mb-0 mt-4">Rp.
                                                <?= number_format($rows['meta_keyword'], 2, ",", ".") ?>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="input-group quantity mt-4" style="width: 100px;">
                                                <input type="text"
                                                    class="form-control bg-light form-control-sm text-center border-0"
                                                    value="<?= $jumlah ?>" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 mt-4">Rp.
                                                <?= number_format($subHarga, 2, ",", ".") ?>
                                            </p>
                                        </td>
                                        <td>
                                            <button class="btn btn-md rounded-circle bg-light border mt-4"
                                                onclick="deletePesanan1(<?= $rows['id_produk'] ?>)">
                                                <i class="fa fa-times text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $totalBelanja += $subHarga ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Total <span class="fw-normal">Belanjaan</span></h1>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Bayar</h5>
                                <div class="">
                                    <p class="mb-0"> <input type="number"
                                            class="form-control bg-light form-control-sm text-center border-0"
                                            id="hargaBayar" value="0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p class="mb-0 pe-4">Rp.
                                <?= number_format($totalBelanja, 2, ",", ".") ?>
                            </p>
                        </div>
                        <button
                            class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="button" id="checkoutPage" bs-total="<?= $totalBelanja ?>">Proses Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
    <script src="templatenav/assets/js/jquery-1.11.0.min.js"></script>
    <script src="templatenav/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="templatenav/assets/js/bootstrap.bundle.min.js"></script>
    <script src="templatenav/assets/js/templatemo.js"></script>
    <script src="templatenav/assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- End Script -->


    <script>
        function deletePesanan1(idProduk) {
            $.ajax({
                type: "POST",
                url: "method/deletePesanan1.php",
                data: {
                    productId: idProduk
                },
                dataType: "json",
                cache: false,
                success: function (data) {
                    Swal.fire({
                        icon: "success",
                        title: "Pesanan Dihapus!!!",
                        text: "Pesanan berhasil dihapus",
                    }).then((result) => {
                        location.reload();
                    });
                }
            });
        }

        $("#checkoutPage").click(function () {
            if ($(this).attr("bs-total") == 0) {
                Swal.fire({
                    icon: "error",
                    title: "Pesanan Kosong!!!",
                    text: "Pesan Makanan dahulu sebelum melanjutkan transaksi",
                });
            } else {
                if (parseInt($("#hargaBayar").val()) >= parseInt($(this).attr("bs-total"))) {
                    $.ajax({
                        type: "POST",
                        url: "method/buyPesanan.php",
                        data: {
                            totalBayar: parseInt($("#hargaBayar").val()),
                            totalBelanja: parseInt($(this).attr("bs-total"))
                        },
                        dataType: "json",
                        cache: false,
                        success: function (data) {
                            Swal.fire({
                                icon: "success",
                                title: "Pesanan Berhasil",
                                text: "Terima Kasih Telah Berbelanja Disini",
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Jumlah Bayar Salah!!!",
                        text: "Masukkan Jumlah nominal yang benar",
                    });
                }
            }
        });
    </script>
</body>

</html>
<?php
include('includes/footer.php');
?>