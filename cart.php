<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Basket | Shop</title>
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
                        Cart
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div id="cart" class="col-md-9"> <!-- col-md-9 begins -->
                <div class="box"> <!-- box begins -->
                    <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form begins -->

                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You have 4 items in your cart</p>
                        <div class="table-responsive"> <!-- table-responsive begins -->
                        
                            <table class="table"> <!-- table begins -->
                            
                                <thead> <!-- thead begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-total</th>
                                    </tr> <!-- tr ends -->

                                </thead> <!-- thead ends -->

                                <tbody> <!-- tbody begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product 4">
                                        </td>
                                        <td>
                                            <a href="#">Organic Pulses</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Rs. 130
                                        </td>
                                        <td>
                                            S
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            Rs. 260
                                        </td>
                                    </tr> <!-- tr ends -->
                                
                                </tbody> <!-- tbody ends -->

                                <tbody> <!-- tbody begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product 4">
                                        </td>
                                        <td>
                                            <a href="#">Organic Pulses</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Rs. 130
                                        </td>
                                        <td>
                                            S
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            Rs. 260
                                        </td>
                                    </tr> <!-- tr ends -->
                                
                                </tbody> <!-- tbody ends -->

                                <tbody> <!-- tbody begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product 4">
                                        </td>
                                        <td>
                                            <a href="#">Organic Pulses</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Rs. 130
                                        </td>
                                        <td>
                                            S
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            Rs. 260
                                        </td>
                                    </tr> <!-- tr ends -->
                                
                                </tbody> <!-- tbody ends -->

                                <tbody> <!-- tbody begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product 4">
                                        </td>
                                        <td>
                                            <a href="#">Organic Pulses</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Rs. 130
                                        </td>
                                        <td>
                                            S
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            Rs. 260
                                        </td>
                                    </tr> <!-- tr ends -->
                                
                                </tbody> <!-- tbody ends -->

                                <tfoot> <!-- tfoot begins -->
                                
                                    <tr> <!-- tr begins -->
                                    
                                        <th colspan="5">Total</th>
                                        <th colspan="2">Rs. 1200</th>
                                    
                                    </tr> <!-- tr ends -->

                                </tfoot> <!-- tfoot ends -->

                            </table> <!-- table ends -->
                        
                        </div> <!-- table-responsive ends -->

                        <div class="box-footer"> <!-- box-footer begins -->
                        
                            <div class="pull-left">  <!-- pull-left begins -->
                            
                                <a href="index.php" class="btn btn-default"> <!-- btn btn-default begins -->
                                
                                    <i class="fa fa-chevron-left"></i> Continue Shopping

                                </a> <!-- btn btn-default ends -->
                            
                            </div>  <!-- pull-left ends -->

                            <div class="pull-right">  <!-- pull-right begins -->
                            
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!-- btn btn-default begins -->
                                
                                    <i class="fa fa-refresh"></i> Update Cart

                                </button> <!-- btn btn-default ends -->

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            
                            </div>  <!-- pull-right ends -->

                        </div> <!-- box-footer ends -->

                    </form> <!-- form ends -->
                </div> <!-- box ends -->

                <div id="row same-height-row"> <!-- row same-height-row begins -->
                    <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 begins -->
                        <div class="box same-height headline"> <!-- box same-height headline begins -->
                            <h3 class="text-center">Products you may like</h3>
                        </div> <!-- box same-height headline ends -->
                    </div> <!-- col-md-3 col-sm-6 ends -->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive begins -->
                        <div class="product same-height"> <!-- product same-height begins -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-thumbnail4.jpg" alt="Product 4">
                            </a>
                            <div class="text"> <!-- text begins -->
                                <h3><a href="details.php">Pulses</a></h3>
                                <p class="price">Rs.130</p>
                            </div> <!-- text ends -->
                        </div> <!-- product same-height ends -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive ends -->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive begins -->
                        <div class="product same-height"> <!-- product same-height begins -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-thumbnail.jpg" alt="Product 1">
                            </a>
                            <div class="text"> <!-- text begins -->
                                <h3><a href="details.php">Pulses</a></h3>
                                <p class="price">Rs.130</p>
                            </div> <!-- text ends -->
                        </div> <!-- product same-height ends -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive ends -->

                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive begins -->
                        <div class="product same-height"> <!-- product same-height begins -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-thumbnail2.jpg" alt="Product 2">
                            </a>
                            <div class="text"> <!-- text begins -->
                                <h3><a href="details.php">Pulses</a></h3>
                                <p class="price">Rs.130</p>
                            </div> <!-- text ends -->
                        </div> <!-- product same-height ends -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive ends -->

                </div> <!-- row same-height-row ends -->

            </div> <!-- col-md-9 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->
            
                <div id="order-summary" class="box"> <!-- box begins -->
                
                    <div class="box-header"> <!-- box-header begins -->
                        <h3>Order Summary</h3>
                    </div> <!-- box-header ends -->
                    <p class="text-muted"> <!-- text-muted begins -->
                        Shipping fee is calculated based on weight
                    </p> <!-- text-muted ends -->
                    <div class="table-responsive"> <!-- table-responsive begins -->
                        <table class="table"> <!-- table begins -->

                            <tbody> <!-- tbody begins -->

                                <tr> <!-- tr begins -->
                                    <td>Order Sub-total</td>
                                    <th>Rs. 1120</th>
                                </tr> <!-- tr ends -->

                                <tr> <!-- tr begins -->
                                    <td>Shipping and handling</td>
                                    <td>Rs. 80</td>
                                </tr> <!-- tr ends -->

                                <tr> <!-- tr begins -->
                                    <td>Tax</td>
                                    <th>Rs. 0</th>
                                </tr> <!-- tr ends -->

                                <tr class="total"> <!-- tr begins -->
                                    <td>Total</td>
                                    <th>Rs. 1200</th>
                                </tr> <!-- tr ends -->
                                
                            </tbody> <!-- tbody ends -->

                        </table> <!-- table ends -->
                    </div> <!-- table-responsive ends -->
                </div> <!-- box ends -->

            </div> <!-- col-md-3 ends -->

        </div> <!-- container ends -->
    </div> <!-- content ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>