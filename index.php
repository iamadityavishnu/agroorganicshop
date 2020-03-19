<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Basket | Home</title>
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

    <div class="container" id="slider"> <!-- container SLIDER begins -->

        <div class="col-md-12"> <!-- col-md-12 begins -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide begins -->

                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner"> <!-- carousel-inner begins -->
                    <div class="item active">
                        <img src="admin_area/slides_images/Pure.jpg" alt="Slide Image 1">
                    </div>

                    <div class="item">
                        <img src="admin_area/slides_images/Pure2.jpg" alt="Slide Image 2">
                    </div>

                    <div class="item">
                        <img src="admin_area/slides_images/Pure3.jpg" alt="Slide Image 3">
                    </div>

                    <div class="item">
                        <img src="admin_area/slides_images/Pure4.jpg" alt="Slide Image 4">
                    </div>
                </div> <!-- carousel-inner ends -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- Slider Arrow -->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a> <!-- Slider Arrow Ends -->

            </div> <!-- carousel slide ends -->

        </div> <!-- col-md-12 ends -->

    </div> <!-- container SLIDER ends -->

    <div id="advantages"> <!-- advantages begins -->
        <div class="container"> <!-- container begins -->
            <div class="same-height-row"> <!-- same-height-row begins -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>

                        <h3><a href="#">We love our customer</a></h3>
                        <p>We love our customer</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>

                        <h3><a href="#">Best ever prices offered</a></h3>
                        <p>We offer the best price</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-certificate"></i>
                        </div>

                        <h3><a href="#">100% organic products</a></h3>
                        <p>We sell only organic products</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

            </div> <!-- same-height-row ends -->
        </div> <!-- container ends -->
    </div> <!-- advantages ends -->

    <div id="hot"> <!-- hot top-products begins -->
        <div class="box"> <!-- box begins -->
            <div class="container"> <!-- container begins -->
                <div class="col-md-12"> <!-- col-md-12 begins -->
                    <h2>
                        Top Products
                    </h2>
                </div> <!-- col-md-12 ends -->
            </div> <!-- container ends -->
        </div> <!-- box ends -->
    </div> <!-- hot top-products ends -->

    <div id="content" class="container"> <!-- container begins -->
        <div class="row"> <!-- row begins -->
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Banana Chips
                            </a>
                        </h3>
                        <p class="price">Rs. 240</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail2.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Potato Chips
                            </a>
                        </h3>
                        <p class="price">Rs. 150</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Turmeric Powder
                            </a>
                        </h3>
                        <p class="price">Rs. 250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Turmeric Powder
                            </a>
                        </h3>
                        <p class="price">Rs. 250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Banana Chips
                            </a>
                        </h3>
                        <p class="price">Rs. 240</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail2.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Potato Chips
                            </a>
                        </h3>
                        <p class="price">Rs. 150</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Turmeric Powder
                            </a>
                        </h3>
                        <p class="price">Rs. 250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begins -->
                <div class="product"> <!-- product begins -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product Image">
                    </a>
                    <div class="text"> <!-- text begins -->
                        <h3>
                            <a href="details.php">
                                Turmeric Powder
                            </a>
                        </h3>
                        <p class="price">Rs. 250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>
                            </a>
                        </p>
                    </div> <!-- text ends -->
                </div> <!-- product ends -->
            </div> <!-- col-sm-4 col-sm-6 single ends -->

        </div> <!-- row ends -->
    </div> <!-- container ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>