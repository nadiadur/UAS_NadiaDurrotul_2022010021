<?php
session_start();

// Include the database connection file
include("admin1/config/dbcon.php");

// Mendapatkan ID produk dari permintaan AJAX
$id_produk = $_GET['id_produk'];

// Query untuk mengambil data produk berdasarkan ID
$query = "SELECT * FROM posts WHERE id_produk = '$id_produk'";
$result = mysqli_query($con, $query);

// Mengecek apakah data produk ditemukan
$id_details = mysqli_fetch_assoc($result);

$relatedProductsQuery = "SELECT * FROM posts WHERE category_id = '{$id_details['category_id']}' AND id_produk != '$id_produk' LIMIT 4";
$relatedProductsResult = mysqli_query($con, $relatedProductsQuery);
$relatedProducts = [];

while ($row = mysqli_fetch_assoc($relatedProductsResult)) {
    $relatedProducts[] = $row;
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

</head>

<body>

    <!-- Your existing HTML code -->

    <!-- Start Article -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <a><img class="w-100" src="uploads/posts/<?= $id_details['image']; ?>"
                                class="card-img img-fluid" alt="Card image cap" id="product-detail"></a>
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2" style="font-size: 18px; font-weight: bold; color: #333;">
                                <?= $id_details['name']; ?>
                            </h1>
                            <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                Rp.
                                <?= number_format($id_details['meta_keyword'], 2, ",", ".") ?>
                            </p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8</span>
                            </p>
                            <h6 style="font-size: 18px; font-weight: bold; color: #333;">Description:</h6>
                            <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                <?= $id_details['description']; ?>
                            </p>
                            <h6 style=" bold;  color: #333;">Manfaat:</h6>
                            <ul class="list-unstyled pb-3" style=" bold;  color: #333;">
                                <p class="h3 py-2" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?= $id_details['meta_description']; ?>
                                </p>
                            </ul>
                            <div class="input-group quantity mb-2" style="width: 100px;">
                                <h6><b style=" bold;  color: #333;">Jumlah</b> <input class="form-control"
                                        id="jumlahProduk" type="number" min="1" name="jml" value="1"
                                        style="width: 100px;"></h6>

                            </div>
                        </div>

                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="<?= $id_details['name']; ?>">
                    </div>
                    <div class="row pb-3">
                        <div class="col d-grid">
                            <!-- Button Back untuk kembali ke file sebelumnya -->
                            <a href="shop.php" class="btn btn-danger btn-lg">Back</a>
                        </div>
                        <div class="col d-grid">
                            <!-- Button Buy to add the product to the cart -->
                            <a href="cart.php" class="btn btn-success btn-lg" id="add-pesanan"
                                data-bs-id="<?= $id_details['id_produk']; ?>">
                                Add to Cart
                            </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Article -->

    <!-- Display related products -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>
            <div id="carousel-related-product" class="row">
                <?php foreach ($relatedProducts as $relatedProduct): ?>
                    <div class="col-md-3 mb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <a href="product_detail.php?id_produk=<?= $relatedProduct['id_produk']; ?>">
                                    <img src="uploads/posts/<?= $relatedProduct['image']; ?>"
                                        class="card-img img-fluid rounded-0" alt="<?= $relatedProduct['name']; ?>">
                                </a>
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <!-- Add your buttons or actions for related products here -->
                                        <li>
                                            <!-- Example: Add to Cart Button -->

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body rounded p-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <h5 class="product-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    <?= $relatedProduct['name']; ?>
                                </h5>
                                <p class="product-price" style="font-size: 18px; font-weight: bold; color: #333;">
                                    Rp.
                                    <?= number_format($relatedProduct['meta_keyword'], 2, ",", ".") ?>
                                </p>
                                <!-- Add other details or buttons as needed -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
    </section>
    <!-- Start Script -->
    <script src="templatenav/assets/js/jquery-1.11.0.min.js"></script>
    <script src="templatenav/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="templatenav/assets/js/bootstrap.bundle.min.js"></script>
    <script src="templatenav/assets/js/slick.min.js"></script>
    <script src="templatenav/assets/js/templatemo.js"></script>
    <script src="templatenav/assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- End Script -->
    <script>
        $("#add-pesanan").click(function () {
            $.ajax({
                type: "POST",
                url: "method/add-pesanan.php",
                data: {
                    productId: $(this).data("bs-id"),
                    productCount: parseInt($(jumlahProduk).val())
                },
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (data.response == "True") {
                        Swal.fire({
                            icon: "success",
                            title: "Pesanan Ditambah!!!",
                            text: "Produk berjumlah : " + $("#jumlahProduk").val(),
                        });
                    }
                }
            });
        });
    </script>
    <!-- End Script -->

</body>

</html>
<?php
include('includes/footer.php');
?>