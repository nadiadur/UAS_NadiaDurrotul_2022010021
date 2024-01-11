<?php
session_start();

if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged in";
    }
    header("Location: index.php");
    exit(0);
}

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
 <link rel="stylesheet" href="assets/css/loginn.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="templatenav/assets/css/fontawesome.min.css">

</head>

<body>
<div class="awal">
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">

                    <?php include('message.php'); ?>

                    <div class="card">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">

                            <?php
                            if (!isset($_SESSION['auth'])) {
                                // Display the login form only if the user is not logged in
                            ?>
                                <form action="logincode.php" method="POST">
                                    <div class="form-group mb-3">
                                        <label>Email Id</label>
                                        <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" name="login_btn" class="btn btn-primary">Login Now</button>
                                    </div>
                                </form>
                            <?php
                            } else {
                                echo "<p>You are already logged in.</p>";
                            }
                            ?>

                            <?php
                            // Add a link to the registration page if the user is not logged in
                            if (!isset($_SESSION['auth'])) {
                            ?>
                                <p>Don't have an account? <a href="register.php">Register here</a></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    ?>
</div>
 <!-- Start Script -->
 <script src="templatenav/assets/js/jquery-1.11.0.min.js"></script>
    <script src="templatenav/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="templatenav/assets/js/bootstrap.bundle.min.js"></script>
    <script src="templatenav/assets/js/templatemo.js"></script>
    <script src="templatenav/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>