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
    <!-- Start Top Nav -->

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



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                    Innisfree, pulau kaya dimana alam nan murni dan kecantikan juga kesehatan
                    berpadu dalam harmoni.<br>
                    innisfree adalah sebuah brand yang mempersembahkanseluruh manfaat alam
                    pulau jeju.<br>
                    menyediakan kecantikan alami dari hidup berdampingan dengan alam<br>
                    sambil mempertahankan keasriannya
                    </p>
                </div>
                <div class="col-md-4">
                    <?php
                    // Koneksi ke database
                    $con = mysqli_connect("localhost", "root", "", "blog");

                    if (!$con) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    $id = 20; // Ganti dengan ID produk yang diinginkan
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
                            <?php
                    } else {
                        echo "Produk tidak ditemukan.";
                    }

                    mysqli_close($con);
                    ?>
                    </div>
                </div>

    </section>
    <!-- Close Banner -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brand Ambassador</h1>
                    <p>
                    Temukan keindahan koleksi dari para Brand Ambassador kami yang menginspirasi dan mewakili keunggulan merek kami. 
                    
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
                        $id = 24; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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
                        $id = 25; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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
                        $id = 27; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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
        <div class="container py-3">
          
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
                        $id = 21; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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
                        $id = 22; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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
                        $id = 23; // Ganti dengan ID gambar yang ingin ditampilkan
                        $query = "SELECT * FROM posts WHERE id = $id"; // Ubah nama_tabel dan image_path sesuai dengan struktur tabel Anda
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $gambar = 'uploads/posts/' . $row['image']; // Sambungkan path ke folder uploads dengan nama file gambar
                            ?>
                            <a href="#"><img src="<?php echo $gambar; ?>" class="card-img-top"></a>

                            <div class="card-body">


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

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>
                Pengalaman berbelanja yang unggul, cepat, dan aman.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promotion</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

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
                                                >cs_id@innisfree.com </a>
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