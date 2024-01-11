<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="templatenav/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="templatenav/image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="templatenav/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="templatenav/assets/css/templatem.css">
    <link rel="stylesheet" href="templatenav/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="templatenav/assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>
<style>
    .circel{
    height: 70px;
    width: 70px;
    background-color: lightgray;
    color: black;
    padding: 12px;
    font-size: 30px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 20px;
    flex-direction: column;
}
.circel i {
  font-size: 35px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.circel:hover{
    background-color: black;
    transition: 0,4s;
    color: white;
}

.contact .btn3{
    background-color: black;
    color: white;
    outline: none;
    border: none;
    height: 40px;
    width: 140px;
    border-radius: 4px;
}
.btn3:hover{
    background: white;
    color: black;
    transition: 0.4s;
    border: 1px solid black;
}

 
</style>
<body>
    <!-- Start Top Nav -->
 
    <!-- Close Top Nav -->


    <!-- Header -->
   
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
            Hubungi kami untuk segala pertanyaan, bantuan, atau masukan.<br>
            Layanan pelanggan kami tersedia untuk memastikan kepuasan dan kemudahan Anda.
            </p>
        </div>
    </div>
    <div class="col-md-16 wow fadeIn" data-wow-delay="0.1s">
    <iframe class="position-relative rounded w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15778.683086796512!2d110.81553141573335!3d-7.584301628173234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTgnMzMuOSJTIDEwMcKwMjgnMzUuNSJF!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>




<section class="contact py-5" id="contact">
       <div class="container py-5">
        <div class="row py-5">
          <div class="col-lg-10 mx-auto">
            <div class="row text-center">
              <div class="col-lg-4">
                <div class="circel">
                 <span><i class="fa fa-home"></i></span>
                </div>
                <h5>Address</h5>
                <p>28 Jalan Letnan Jenderal S. Parman
                11470 Jakarta Jakarta <br></p>
              </div>
              <div class="col-lg-4">
                <div class="circel">
                  <span><i class="fa fa-envelope"></i></span>
                </div>
                <h5>Email</h5>
                <p> cs_id@innisfree.com</p>
              </div>
              <div class="col-lg-4">
                <div class="circel">
                  <span><i class="fa fa-phone"></i></span>
                </div>
                <h5>WhatsApp</h5>
                <p> +62 21 29508758</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <form action="">
              <div class="form">
                <form method="post">
              <div class="form-row">
                <div class="col-lg-6">
                  <input type="text" class="form-control bg-light mb-3" placeholder="Name" id="name" autocomplete="off">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control bg-light mb-3" placeholder="Email" id="email" autocomplete="off">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control bg-light mb-3" placeholder="Subject" id="subject" autocomplete="off">
                </div>
              </div>  
               <div class="form-row">
                <div class="col-lg-12">
                  <textarea id="message" class="form-control bg-light" placeholder="Message" cols="30" rows="10"></textarea>
                </div>
               </div>
               <button id="btn" class="btn3 my-4">Submit</button>
            </form>
          </form>
          </div>
          </div>
        </div>

       </div>
      </section>





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