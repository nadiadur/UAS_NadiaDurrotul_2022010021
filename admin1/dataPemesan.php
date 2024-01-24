<?php
require "config/dbcon.php";
include('includes/header.php');

// Assuming you have a function to handle database queries (replace with your actual function)
$query = query("SELECT * FROM pemesanan ORDER BY tanggal_pemesan");
?>

<link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<?php include("includes/header.php"); ?>

<div id="wrapper">
    <?php include "includes/sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <?php include "includes/navbar-top.php" ?>

        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">List Data Pesanan</h1>
                </div>

                <div class="card shadow mb-4 mt-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pesanan</th>
                                        <th>Total Harga</th>
                                        <th>Total Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $pemesanan): ?>
                                        <tr>
                                            <td><?= $pemesanan['tanggal_pemesan']; ?></td>
                                            <td>Rp. <?= number_format($pemesanan['total_harga'], 2, ",", ".") ?></td>
                                            <td>Rp. <?= number_format($pemesanan['total_bayar'], 2, ",", ".") ?></td>
                                            <td>
                                                <button type="button" style="border:none; background:transparent"
                                                    data-toggle="modal"
                                                    data-target="#deleteModal<?= $pemesanan['id_pemesan']; ?>">
                                                    <span class="material-symbols-outlined text-danger"
                                                        style="border:none;">delete</span>
                                                </button>
                                                <!-- Rest of your HTML for modal and other actions -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "includes/footer.php" ?>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="asset/vendor/jquery/jquery.min.js"></script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/sb-admin-2.min.js"></script>
<!-- Add any additional scripts or customizations here -->
