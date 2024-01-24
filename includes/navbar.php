
<nav class="navbar navbar-expand-lg navbar-light shadow justify-content-end">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/in.png" alt="ntlogo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container d-flex justify-content-between align-items-center ml-lg-9">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex align-items-center justify-content-between">

                        <li class="nav-item">
                            <a class="nav-link mr-2" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['auth_user'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form action="allcode.php" method="POST">
                                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link sr-only text-hide" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sr-only text-hide" href="register.php">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="navbar align-self-center d-flex">
        <a class="nav-icon position-relative text-decoration-none" href="cart.php">
    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"><?= isset($_SESSION['pemesanan']) ? count($_SESSION['pemesanan']) : 0; ?></span>
</a>

              

        </div>

        </div>
        
        <a class="nav-icon position-relative text-decoration-none mr-6 ml-8" href="login.php">
        <i class="fa fa-fw fa-user text-dark mr-10"></i>
    </a>

       

  
      

    </div>
 

</nav>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
