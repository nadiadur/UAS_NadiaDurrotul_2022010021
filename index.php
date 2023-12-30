<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="templatenav/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="templatenav/assets/img/favicon.ico">

    <link rel="stylesheet" href="templatenav/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="templatenav/assets/css/templatemo.css">
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
                    <nav class="navbar navbar-expand-lg navbar-light shadow">
                        <div class="container d-flex justify-content-between align-items-center">



                            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
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
                                            <input type="text" class="form-control" id="inputMobileSearch"
                                                placeholder="Search ...">
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
                            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row p-5">
                                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                            <?php
                                            // Koneksi ke database
                                            $con = mysqli_connect("localhost", "root", "", "blog");

                                            if (!$con) {
                                                die("Koneksi gagal: " . mysqli_connect_error());
                                            }

                                            // Ambil gambar berdasarkan ID tertentu
                                            $id = 15; // Ganti dengan ID gambar yang ingin ditampilkan
                                            $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                                $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                                ?>
                                                <img class="img-fluid" src="<?php echo $gambar; ?>" alt="">
                                                <?php
                                            } else {
                                                echo "Gambar dengan ID $id tidak ditemukan.";
                                            }


                                            // Tutup koneksi database
                                            mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                                            <div class="text-align-left align-self-center">
                                                <h1 class="h1 text-success "><b>Innisfree</b></h1>
                                                <h3 class="h2">innisfree No.1 Green tea</h3>
                                                <p>
                                                    'pelembab khusus' yang dibuat setelah
                                                    mempelajari 2.401 varietas teh hijau
                                                    - Untuk mencari 'kelembaban' yang akan mewujudkan kondisi kulit yang
                                                    ideal, innisfree meneliti varietas teh hijau yang unik di Korea, dan
                                                    setelah menganalisa berbagai bahan aktif akhirnya berhasil membuat
                                                    Beauty Green Tea yang sangat kaya dengan Amino acid
                                                    yang sangat efektif sebagai pelembab kulit.


                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row p-5">
                                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                            <?php
                                            // Koneksi ke database
                                            $con = mysqli_connect("localhost", "root", "", "blog");

                                            if (!$con) {
                                                die("Koneksi gagal: " . mysqli_connect_error());
                                            }

                                            // Ambil gambar berdasarkan ID tertentu
                                            $id = 10; // Ganti dengan ID gambar yang ingin ditampilkan
                                            $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                                $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                                ?>
                                                <img class="img-fluid" src="<?php echo $gambar; ?>" alt="">
                                                <?php
                                            } else {
                                                echo "Gambar dengan ID $id tidak ditemukan.";
                                            }


                                            // Tutup koneksi database
                                            mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                                            <div class="text-align-left">
                                                <h1 class="h1">Proident occaecat</h1>
                                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                                <p>
                                                    You are permitted to use this Zay CSS template for your commercial
                                                    websites.
                                                    You are <strong>not permitted</strong> to re-distribute the template
                                                    ZIP file in any kind of template collection websites.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row p-5">
                                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                            <?php
                                            // Koneksi ke database
                                            $con = mysqli_connect("localhost", "root", "", "blog");

                                            if (!$con) {
                                                die("Koneksi gagal: " . mysqli_connect_error());
                                            }

                                            // Ambil gambar berdasarkan ID tertentu
                                            $id = 17; // Ganti dengan ID gambar yang ingin ditampilkan
                                            $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                                $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                                ?>
                                                <img class="img-fluid" src="<?php echo $gambar; ?>" alt="">
                                                <?php
                                            } else {
                                                echo "Gambar dengan ID $id tidak ditemukan.";
                                            }


                                            // Tutup koneksi database
                                            mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                                            <div class="text-align-left">
                                                <h1 class="h1">Repr in voluptate</h1>
                                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                                <p>
                                                    We bring you 100% free CSS templates for your websites.
                                                    If you wish to support TemplateMo, please make a small contribution
                                                    via PayPal or tell your friends about our website. Thank you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev text-decoration-none w-auto ps-3"
                            href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"
                            style="color : rgb(243, 106, 123);">
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
                                <h1 class="h1">Categories of The Month</h1>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 p-5 mt-3">
                                <?php
                                // Koneksi ke database
                                $con = mysqli_connect("localhost", "root", "", "blog");

                                if (!$con) {
                                    die("Koneksi gagal: " . mysqli_connect_error());
                                }

                                // Ambil gambar berdasarkan ID tertentu
                                $id = 14; // Ganti dengan ID gambar yang ingin ditampilkan
                                $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                    ?>
                                    <a href="#"><img src="<?php echo $gambar; ?>"
                                            class="rounded-circle img-fluid border"></a>
                                    <?php
                                } else {
                                    echo "Gambar dengan ID $id tidak ditemukan.";
                                }

                                // Tutup koneksi database
                                mysqli_close($con);
                                ?>
                                <h5 class="text-center mt-3 mb-3">Serum</h5>
                                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                            </div>
                            <div class="col-12 col-md-4 p-5 mt-3">
                                <?php
                                // Koneksi ke database
                                $con = mysqli_connect("localhost", "root", "", "blog");

                                if (!$con) {
                                    die("Koneksi gagal: " . mysqli_connect_error());
                                }

                                // Ambil gambar berdasarkan ID tertentu
                                $id = 13; // Ganti dengan ID gambar yang ingin ditampilkan
                                $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                    ?>
                                    <a href="#"><img src="<?php echo $gambar; ?>"
                                            class="rounded-circle img-fluid border"></a>
                                    <?php
                                } else {
                                    echo "Gambar dengan ID $id tidak ditemukan.";
                                }

                                // Tutup koneksi database
                                mysqli_close($con);
                                ?>
                                <h2 class="h5 text-center mt-3 mb-3">Toner</h2>
                                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                            </div>

                            <div class="col-12 col-md-4 p-5 mt-3">
                                <?php
                                // Koneksi ke database
                                $con = mysqli_connect("localhost", "root", "", "blog");

                                if (!$con) {
                                    die("Koneksi gagal: " . mysqli_connect_error());
                                }

                                // Ambil gambar berdasarkan ID tertentu
                                $id = 19; // Ganti dengan ID gambar yang ingin ditampilkan
                                $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                    ?>
                                    <a href="#"><img src="<?php echo $gambar; ?>"
                                            class="rounded-circle img-fluid border"></a>
                                    <?php
                                } else {
                                    echo "Gambar dengan ID $id tidak ditemukan.";
                                }

                                // Tutup koneksi database
                                mysqli_close($con);
                                ?>
                                <h2 class="h5 text-center mt-3 mb-3">Cream</h2>
                                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                            </div>
                        </div>
                    </section>
                    <!-- End Categories of The Month -->


                    <!-- Start Featured Product -->
                    <section class="bg-light">
                        <div class="container py-5">
                            <div class="row text-center py-3">
                                <div class="col-lg-6 m-auto">
                                    <h1 class="h1">Featured Product</h1>
                                    <p>
                                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4 mb-4">
                                    <div class="card h-100">
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
                                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>
                                            
                                        <div class="card-body">
                                            <ul class="list-unstyled d-flex justify-content-between">
                                                <li>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                </li>
                                                <li class="text-muted text-right"
                                                        style="font-size: 18px; font-weight: bold; color: #333;">
                                                        <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                                    </li>
                                                </ul>
                                                <a href="shop-single.html" class="h2 text-decoration-none text-dark"
                                                    style="font-size: 18px; font-weight: bold; color: #333;">
                                                    <?php echo $row['name']; ?>

                                                </a>
                                            
                                        </div>
                                    </div>
                                    <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                </div>
                                <div class="col-12 col-md-4 mb-4">
                                    <div class="card h-100">
                                        <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 12; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>
                                            
                                        <div class="card-body">
                                            <ul class="list-unstyled d-flex justify-content-between">
                                                <li>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                </li>
                                                <li class="text-muted text-right"
                                                        style="font-size: 18px; font-weight: bold; color: #333;">
                                                        <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                                    </li>
                                                </ul>
                                                <a href="shop-single.html" class="h2 text-decoration-none text-dark"
                                                    style="font-size: 18px; font-weight: bold; color: #333;">
                                                    <?php echo $row['name']; ?>

                                                </a>
                                           
                                        </div>
                                    </div>
                                    <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                </div>
                                <div class="col-12 col-md-4 mb-4">
                                    <div class="card h-100">
                                        <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 18; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                                            <div class="card-body">
                                                <ul class="list-unstyled d-flex justify-content-between">
                                                    <li>
                                                        <i class="text-warning fa fa-star"></i>
                                                        <i class="text-warning fa fa-star"></i>
                                                        <i class="text-warning fa fa-star"></i>
                                                        <i class="text-warning fa fa-star"></i>
                                                        <i class="text-warning fa fa-star"></i>
                                                    </li>
                                                    <li class="text-muted text-right"
                                                        style="font-size: 18px; font-weight: bold; color: #333;">
                                                        <?php echo 'Rp. ' . number_format($row['meta_keyword'], 0, ',', '.') . ',00'; ?>

                                                    </li>
                                                </ul>
                                                <a href="shop-single.html" class="h2 text-decoration-none text-dark"
                                                    style="font-size: 18px; font-weight: bold; color: #333;">
                                                    <?php echo $row['name']; ?>

                                                </a>
                                                
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
                            </div>
                        </div>
                    </section>
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
                                            123 Consectetur at ligula 10660
                                        </li>
                                        <li>
                                            <i class="fa fa-phone fa-fw"></i>
                                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope fa-fw"></i>
                                            <a class="text-decoration-none"
                                                href="mailto:info@company.com">info@company.com</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 pt-5">
                                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4 pt-5">
                                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li><a class="text-decoration-none" href="#">Home</a></li>
                                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                                        <li><a class="text-decoration-none" href="#">Contact</a></li>
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
                                                href="http://facebook.com/"><i
                                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://www.instagram.com/"><i
                                                    class="fab fa-instagram fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://twitter.com/"><i
                                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank"
                                                href="https://www.linkedin.com/"><i
                                                    class="fab fa-linkedin fa-lg fa-fw"></i></a>
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


                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    ?>


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>