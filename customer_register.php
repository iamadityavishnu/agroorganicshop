<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Basket | Register</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <div class="" id="top"> <!-- begenning of top -->

        <div class="container"> <!-- begenning of container -->

            <div class="col-md-6 offer"> <!-- col-md-6 offer begin -->

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>

            </div> <!-- end of col-md-6 offer -->

            <div class="col-md-6"> <!-- col-md-6 begin -->
            
                <ul class="menu"> <!-- menu begin -->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul> <!-- menu finish -->

            </div> <!-- col-md-6 end -->
            
        </div> <!-- end of container -->

    </div> <!-- end of top -->

    <div id="navbar" class="navbar navbar-default"> <!-- navbar start -->
    
        <div class="container"> <!-- container start -->

            <div class="navbar-header"> <!-- navbar-header start -->

                <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home start -->
                    <img src="images/Ob - logo.png" height="45px" alt="Organic Basket Logo" class="hidden-xs"> <!-- i made a change here -->
                    <img src="images/ecom-store-logo-mobile.png" alt="Organic Basket Logo" class="visible-xs">
                </a> <!-- navbar-brand home finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>

            </div> <!-- navbar-header finish -->

            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse start -->

                <div class="padding-nav"> <!-- padding-nav begin -->

                    <ul class="nav navbar-nav left"> <!-- nav navbar-nav left begin -->
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul> <!-- nav navbar-nav left finish -->

                </div> <!-- padding-nav finish -->

                <a href="cart.php" class="btn navbar-btn btn-primary right"> <!-- btn navbar-btn btn-primary right begin -->
                
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in your cart</span>
                
                </a> <!-- btn navbar-btn btn-primary right finish -->

                <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!-- btn btn-primary navbar-btn begin -->

                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>

                    </button> <!-- btn btn-primary navbar-btn finish -->

                </div> <!-- navbar-collapse collapse right finish -->

                <div class="collapse clearfix" id="search"> <!-- collapse clearfix begin --> <!-- SEARCH FROM -->
                
                    <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form begin -->
                    
                        <div class="input-group"> <!-- input-group begin -->
                            <input type="text" class="from-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn"> <!-- search button span -->
                            <button type="submit" name="search" value="Search" class="btn btn-primary"> <!-- btn btn-primary begin -->
                                <i class="fa fa-search"></i>
                            </button> <!-- btn btn-primary finish -->
                            </span> <!-- search button span -->
                        </div> <!-- input-group finish -->
                    
                    </form> <!-- navbar-form finish -->
                
                </div> <!-- collapse clearfix finish --> <!-- SEARCH FROM ENDS -->

            </div> <!-- navbar-collapse collapse finish -->

        </div> <!-- container finish -->

    </div> <!-- navbar finish -->

    <div id="content"> <!-- content begins -->
        <div class="container"> <!-- container begins -->
            <div class="col-md-12"> <!-- col-md-12 begins -->

                <ul class="breadcrumb"> <!-- breadcrumb begins -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Register
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->

                <div class="box" style="background: #f7f7f7"> <!-- box begins --> <!-- i made a change here to be reviewed -->
                
                    <div class="box-header"> <!-- box-header begins -->

                        <center> <!-- center begins -->
                            <h2>Create a new account</h2>
                        </center> <!-- center ends -->

                        <form action="customer_register.php" method="post" enctype="multipart/form-data"> <!-- form begins -->
                        
                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Password</label>
                                <input type="password" class="form-control" name="c_pass" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="text-center"> <!-- text-center begins -->
                            
                                <button type="submit" name="register" class="btn btn-primary"> <!-- btn btn-primary begins -->
                                
                                    <i class="fa fa-user-plus"></i> Register
                                
                                </button> <!-- btn btn-primary ends -->

                            </div> <!-- text-center ends -->
                        
                        </form> <!-- form ends -->

                    </div> <!-- box-header ends -->

                </div> <!-- box ends -->

            </div> <!-- col-md-9 ends -->

        </div> <!-- container ends -->
    </div> <!-- content ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>