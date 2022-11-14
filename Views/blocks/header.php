<html lang="en">
<?php
session_start();

 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allcarta - Login</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid header">
        <nav class="navbar navbar-expand-lg">
            <div class="navbar-logo" href="#">
                <img src="../../Assets/logo.png" alt="">
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../users/home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="../users/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users/shopping-cart.php">Cart</a>
                    </li>
                    
                </ul>
                <form class="form-inline my-lg-0" action="../users/product.php" method="post">
                    <input class="form-control mr-sm-3" type="text" placeholder="Search" name="keyword" aria-label="Search">

                    <i class="fas fa-search nav-icon-search" type="submit"></i>
                </form>
                <div class="col-1 header_navbar-icon">

                    <?php
                    // var_dump(is_dir($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Controllers/logoutController.php"));
                    // //var_dump(is_dir("../do-an-web-php/Controllers/logoutController.php"));
                    // exit;
                    // require_once("../../Controllers/logoutController.php");
                    // $controller = new UserController();
                    // $controller->invoke();
                     ?>  
                   
                   
                  
                    
                    <ul class="subnav subnav-login ">
                
                    </li class="nav-item"> <a class="nav-link" href="../users/signin.php"> <?php
                    if (isset($_SESSION['username'])) {
                        $state = $_SESSION['username'];
                        echo "<span class='username'>" . $state . "</span>";
                    }else
                    {
                        echo "Log in";
                    }
                    ?></a>
                    </li class="nav-item"> <a class="nav-link" href="../users/signup.php">Sign up</a>
                    
                    </li class="nav-item"> <a class="nav-link" href="../users/home.php"> <?php
                    if (isset($_SESSION['username'])) {
                        unset($_SESSION['username']);
                       echo "Logout";
                    }
                    ?></a>

                    </ul>

                </div>
            </div>
        </nav>
    </div>
</body>

</html>