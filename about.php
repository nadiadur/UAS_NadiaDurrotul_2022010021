<?php
require("admin1/config/dbcon.php");

session_start();
$result = mysqli_query($con, "SELECT * FROM posts");
$rows_up_3 = [];
$rows_up_1 = [];


while ($row = mysqli_fetch_assoc($result)) {
    if ($row['up'] == 3) {
        $rows_up_3[] = $row;
    } elseif ($row['up'] == 1) {
        $rows_up_1[] = $row;
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
                        <?php foreach ($rows_up_3 as $post): ?>
                            <!-- Display images with up 3 -->
                            <div class="product-card">
                                <img src="uploads/posts/<?= $post['image']; ?>" class="card-img img-fluid rounded-0">
                            </div>
                        <?php endforeach; ?>
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
    <?php foreach ($rows_up_1 as $post): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <a><img src="uploads/posts/<?= $post['image']; ?>" class="card-img-top"></a>
                <div class="card-body">


                </div>
            </div>
        </div>
    <?php endforeach; ?>
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