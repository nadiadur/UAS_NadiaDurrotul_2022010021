<?php


session_start();
include('includes/header.php');
include('includes/navbar.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Listing Page</title>
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
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

    <!-- Header -->
   
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



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>

            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="shop.php">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="serum.php">Serum</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="toner.php">Toner</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="cream.php">Cream</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                 

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
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
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
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
                                <!-- Akhir loop untuk menampilkan produk -->



                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
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
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
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
                                <!-- Akhir loop untuk menampilkan produk -->


                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
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
                                        <span
                                            class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
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
                                <!-- Akhir loop untuk menampilkan produk -->


                 
                  

                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Platform</h1>
                    <p>
                    Temukan keberagaman di setiap langkah! Jelajahi platform-platform kami yang menghadirkan kemudahan, 
                    dan pilihan terbaik.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand"
                                data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 28; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://shopee.co.id/innisfreeofficialshop" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 32; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.sociolla.com/316_innisfree" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 30; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.tokopedia.com/innisfree" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 31; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.tiktok.com/@innisfreeindonesia" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                    <div class="row">
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 28; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://shopee.co.id/innisfreeofficialshop" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 32; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.sociolla.com/316_innisfree" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 30; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.tokopedia.com/innisfree" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                            <div class="col-3 p-md-5">
                                            <?php
                                        // Koneksi ke database
                                        $con = mysqli_connect("localhost", "root", "", "blog");

                                        if (!$con) {
                                            die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        // Ambil gambar berdasarkan ID tertentu
                                        $id = 31; // Ganti dengan ID gambar yang ingin ditampilkan
                                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                                            ?>
                                            <a href="https://www.tiktok.com/@innisfreeindonesia" target="_blank"><img src="<?php echo $gambar; ?>" class="img-fluid brand-img" alt="Brand Logo" style="width: 100%; height: auto;"></a>
                                            <?php
                                        } else {
                                            echo "Gambar dengan ID $id tidak ditemukan.";
                                        }

                                        // Tutup koneksi database
                                        mysqli_close($con);
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


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
                                            <a class="text-decoration-none"
                                                >cs_id@innisfree.com</a>
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
</body>

</html>
<?php
include('includes/footer.php');
?>