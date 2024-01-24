<?php
require("admin1/config/dbcon.php");

session_start();
$result = mysqli_query($con, "SELECT * FROM posts");
$rows = [];
// $filter = "semua";
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['category_id'] == 3) {
        $rows[] = $row;
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
                  
                </div>
                <div class="row">
    <?php foreach ($rows as $posts): ?>
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card rounded-0">
                    <img src="uploads/posts/<?= $posts['image']; ?>" class="card-img img-fluid rounded-0">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                            <li><a class="btn btn-success text-white mt-2" href="detail.php?id_produk=<?= $posts['id_produk'];?>"><i class="far fa-eye"></i></a></li>
                            <li><a class="btn btn-success text-white mt-2 heart-icon" id="heartIcon<?= $posts['id_produk']; ?>"><i class="far fa-heart"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="card-body rounded p-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                        <?= $posts['name']; ?>
                    </h5>
                    <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                        Rp. <?= number_format($posts['meta_keyword'], 2, ",", ".") ?>
                    </p>
                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                        <li class="pt-2">
                            <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                        </li>
                    </ul>
                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                        <li>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
            </div>
        </div>

    </div>
    </div>
    <!-- End Content -->

   


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
                                            Copyright &copy; 2024 Nadia Durrotul

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- End Script -->
    <script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var productId = $(this).data("product-id");
            $.ajax({
                type: "POST",
                url: "add-to-cart.php",
                data: { productId: productId },
                dataType: "json",
                success: function (data) {
                    window.location.href = "cart.php";
                },
                error: function (error) {
                    console.log("Error:", error);
                }
            });
        });
    });
</script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
  const heartIcons = document.querySelectorAll(".heart-icon");

  heartIcons.forEach(function(heartIcon) {
    const productId = heartIcon.id.replace("heartIcon", "");
    let isHeartFilled = false;

    // Periksa apakah status ikon hati disimpan di penyimpanan lokal
    const storedStatus = localStorage.getItem(`heartStatus_${productId}`);
    if (storedStatus !== null) {
      isHeartFilled = JSON.parse(storedStatus);
      const heartIconElement = heartIcon.querySelector("i");
      heartIconElement.classList.toggle("far", !isHeartFilled);
      heartIconElement.classList.toggle("fas", isHeartFilled);
    }

    heartIcon.addEventListener("click", function() {
      const heartIconElement = heartIcon.querySelector("i");
      heartIconElement.classList.toggle("far", !isHeartFilled);
      heartIconElement.classList.toggle("fas", isHeartFilled);

      isHeartFilled = !isHeartFilled;

      // Simpan status ikon hati ke penyimpanan lokal
      localStorage.setItem(`heartStatus_${productId}`, JSON.stringify(isHeartFilled));
    });
  });
});
</script>
</body>

</html>
<?php
include('includes/footer.php');
?>