<?php
require("admin1/config/dbcon.php");

session_start();
$result = mysqli_query($con, "SELECT * FROM posts");
$rows_up_3 = [];
$rows_up_1 = [];
$rows_up_2 = [];

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['ta'] == 3) {
        $rows_up_3[] = $row;
    } elseif ($row['ta'] == 1) {
        $rows_up_1[] = $row;
    } elseif ($row['ta'] == 2) {
        $rows_up_2[] = $row; // Fixed: Correct array for 'ta' == 2
    }
}
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Page</title>
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
</head>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php include('message.php'); ?>

                    <!-- Modal -->
                    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="w-100 pt-1 mb-5 text-right">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="inputModalSearch" name="q"
                                        placeholder="Search ...">
                                    <button type="submit" class="input-group-text bg-success text-light">
                                        <i class="fa fa-fw fa-search text-white"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Start Banner Hero -->
                    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach ($rows_up_1 as $key => $post): ?>
                                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="<?= $key ?>"
                                    <?= ($key === 0) ? 'class="active"' : '' ?>>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php foreach ($rows_up_1 as $key => $post): ?>
                                <div class="carousel-item <?= ($key === 0) ? 'active' : '' ?>">
                                    <div class="container">
                                        <div class="row p-5">
                                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                                <img src="uploads/posts/<?= htmlspecialchars($post['image']); ?>"
                                                    alt="<?= $post['slug']; ?>">
                                            </div>
                                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                                <div class="text-align-left align-self-center">
                                                    <h1 class="h1 text-success"><b><?= $post['slug']; ?></b></h1>
                                                    <h3 class="h2"><?= $post['description']; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev text-decoration-none w-auto ps-3"
                            href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"
                            style="color: rgb(243, 106, 123);">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next text-decoration-none w-auto pe-3"
                            href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <!-- End Banner Hero -->

                    <!-- Start Categories of The Month -->
                    <section class="container py-5">
                        <div class="row text-center pt-3">
                            <div class="col-lg-6 m-auto">
                                <h1 class="h1">Categories</h1>
                                <p>
                                    Temukan kategori produk skincare terbaik kami yang dirancang untuk
                                    merawat kulit Anda dengan pilihan lengkap dari perawatan wajah hingga perawatan
                                    tubuh.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($rows_up_3 as $post): ?>
                                <div class="col-12 col-md-4 p-5 mt-3">
                                    <a href="serum.php">
                                        <img src="uploads/posts/<?= $post['image']; ?>" alt="<?= $post['meta_description']; ?>"
                                            class="rounded-circle img-fluid border">
                                    </a>
                                    <h5 class="text-center mt-3 mb-3"> <?= $post['meta_description']; ?></h5>
                                    <p class="text-center"><a class="btn btn-success" href="shop.php">Go Shop</a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
                    <!-- End Categories of The Month -->

                    <!-- Start Recommended Products -->
                    <section class="bg-light">
                        <div class="container py-5">
                            <div class="row text-center py-3">
                                <div class="col-lg-6 m-auto">
                                    <h1 class="h1">Recommended Products</h1>
                                    <p>
                                        Dengan pemilihan teliti dan ulasan yang terpercaya,
                                        kami hadir untuk membantu Anda menemukan produk yang sesuai kebutuhan dan
                                        keinginan Anda.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row g-4">
                                    <?php foreach ($rows_up_2 as $post): ?>
                                        <div class="col-12 col-md-4 mb-4">
                                            <div class="card h-100">
                                                <div class="p-4 rounded bg-light">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 mb-3">
                                                            <img src="uploads/posts/<?= $post['image']; ?>" alt="<?= $post['name']; ?>"
                                                                class="card-img-top">
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <ul class="list-unstyled d-flex mb-0">
                                                                        <li>
                                                                            <i class="text-warning fa fa-star"></i>
                                                                            <i class="text-warning fa fa-star"></i>
                                                                            <i class="text-warning fa fa-star"></i>
                                                                            <i class="text-warning fa fa-star"></i>
                                                                            <i class="text-muted fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p class="text-muted text-right"
                                                                    style="font-size: 18px; font-weight: bold; color: #333;">
                                                                    Rp. <?= number_format($post['meta_keyword'], 2, ",", ".") ?>
                                                                </p>
                                                                <a href="./details.php?id_produk=<?= $post['id_produk']; ?>"
                                                                    class="h2 text-decoration-none text-dark">
                                                                    <?= $post['name']; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Recommended Products -->

                    <!-- Start Footer -->
                    <footer class="bg-dark" id="tempaltemo_footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 pt-5">
                                    <h2 class="h2 text-success border-bottom pb-3 border-light logo"
                                        style="color: rgb(243, 106, 123);">Innisfree Shop
                                    </h2>
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li>
                                            <i class="fas fa-map-marker-alt fa-fw"></i>
                                            28 Jalan Letnan Jenderal S. Parman <br>11470 Jakarta Jakarta
                                        </li>
                                        <li>
                                            <i class="fa fa-phone fa-fw"></i>
                                            <a class="text-decoration-none">+62 21 29508758</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope fa-fw"></i>
                                            <a class="text-decoration-none">cs_id@innisfree.com</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 pt-5">
                                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li><a class="text-decoration-none" href="serum.php">Serum</a></li>
                                        <li><a class="text-decoration-none" href="toner.php">Toner</a></li>
                                        <li><a class="text-decoration-none" href="cream.php">Cream</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4 pt-5">
                                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                                        <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row text-light mb-4">
                                <div class="col-12 mb-3">
                                    <div class="w-100 my-3 border-top border-light"></div>
                                </div>
                                <div class="col-auto me-auto">
                                    <ul class="list-inline text-left footer-icons">
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://shopee.co.id/innisfreeofficialshop"><i
                                                    class="fa fa-shopping-cart fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://www.instagram.com/innisfreeofficial/"><i
                                                    class="fab fa-instagram fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://twitter.com/innisfree_kr"><i
                                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 bg-black py-3">
                            <div class="container">
                                <div class="row pt-2">
                                    <div class="col-12">
                                        <p class="text-left text-light">
                                            Copyright &copy; 2024 Nadia Durrotul
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- End Footer -->

                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    ?>

    <!-- Start Script -->
    <script src="templatenav/assets/js/jquery-1.11.0.min.js"></script>
    <script src="templatenav/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="templatenav/assets/js/bootstrap.bundle.min.js"></script>
    <script src="templatenav/assets/js/templatemo.js"></script>
    <script src="templatenav/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
