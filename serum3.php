<?php
session_start();
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

    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">


            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <?php
                        // Koneksi ke database
                        $con = mysqli_connect("localhost", "root", "", "blog");

                        if (!$con) {
                            die("Koneksi gagal: " . mysqli_connect_error());
                        }

                        // Ambil gambar berdasarkan ID tertentu
                        $id = 16; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a><img src="<?php echo $gambar; ?>" class="card-img img-fluid" alt="Card image cap"
                                    id="product-detail"></a>

                        </div>

                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h1>
                                <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <p class="py-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <span class="list-inline-item text-dark">Rating 4.8</span>
                                </p>
                                <h6>Description:</h6>
                                <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['description']; ?>
                                </p>
                                <h6 style=" bold;  color: #333;">Manfaat:</h6>
                                <ul class="list-unstyled pb-3" style=" bold;  color: #333;">
                                <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['meta_description']; ?>
                                </p>
                                </ul>

                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit"
                                        value="buy">Buy</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add
                                        To Cart</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php
                        } else {
                            echo "Gambar dengan ID $id tidak ditemukan.";
                        }

                        // Tutup koneksi database
                        mysqli_close($con);
                        ?>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 11; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="toner2.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 12; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="toner3.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 13; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="toner4.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 14; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="serum1.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 15; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="serum2.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 16; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="serum3.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 17; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="cream1.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 18; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="cream2.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 19; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="cream3.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 11; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 12; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <?php
                            // Koneksi ke database
                            $con = mysqli_connect("localhost", "root", "", "blog");

                            if (!$con) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $id = 13; // Ganti dengan ID produk yang diinginkan
                            $query = "SELECT * FROM posts WHERE id = $id"; // Mengambil produk berdasarkan ID tertentu
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="product-card">
                                    <?php
                                    // Tampilkan gambar
                                    echo '<img src="uploads/posts/' . $row['image'] . '" class="card-img img-fluid rounded-0" alt="' . $row['name'] . '">';
                                    ?>

                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.php"><i
                                                        class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                </p>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            } else {
                                echo "Produk tidak ditemukan.";
                            }

                            mysqli_close($con);
                            ?>


            </div>


        </div>
    </section>
    <!-- End Article -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo"
                        style="color : rgb(243, 106, 123);">Innisfree Shop
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
                                href="https://twitter.com/innisfree_kr"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
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
                            Copyright &copy; 2023 Nadia Durrotul

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="templatenav/assets/js/jquery-1.11.0.min.js"></script>
    <script src="templatenav/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="templatenav/assets/js/bootstrap.bundle.min.js"></script>
    <script src="templatenav/assets/js/templatemo.js"></script>
    <script src="templatenav/assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="templatenav/assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>
<?php
include('includes/footer.php');
?>