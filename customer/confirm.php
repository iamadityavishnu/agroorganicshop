<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayur Naturals | My Account</title>
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
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go to Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">Login</a>
                    </li>
                </ul> <!-- menu finish -->

            </div> <!-- col-md-6 end -->
            
        </div> <!-- end of container -->

    </div> <!-- end of top -->

    <div id="navbar" class="navbar navbar-default"> <!-- navbar start -->
    
        <div class="container"> <!-- container start -->

            <div class="navbar-header"> <!-- navbar-header start -->

                <a href="../index.php" class="navbar-brand home"> <!-- navbar-brand home start -->
                    <img src="images/ayur-naturals-logo.png" height="45px" alt="Ayur Naturals Logo" class="hidden-xs"> <!-- i made a change here -->
                    <img src="images/ayur-naturals-logo.png" height="45px" alt="Ayur Naturals Logo" class="visible-xs">
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
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
                        My Account
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->
            
                <div class="box"> <!-- box begins -->
                
                    <h1 align="center">Please confirm your payment</h1>

                    <form action="confirm.php" method="post" enctype="multipart/form-data"> <!-- form begins -->
                    
                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label>Invoice No</label>
                            <input type="text" class="form-control" name="invoice_no" required>
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label>Amount Sent</label>
                            <input type="text" class="form-control" name="amount_sent" required>
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label>Payment Method</label>
                            <select name="select_payment_mode" id="" class="form-control"> <!-- form-group begins -->
                            
                                <option>Select Payment Mode</option>
                                <option>UPI</option>
                                <option>Bank Transfer</option>
                                <option>Net Banking</option>
                                <option>Direct</option>
                            
                            </select> <!-- form-group ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label>Transaction/Reference ID</label>
                            <input type="text" class="form-control" name="ref_no" required>
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label>Payment Date</label>
                            <input type="date" class="form-control form-height-custom" name="date" required>
                        
                        </div> <!-- form-group ends -->

                        <div class="text-center"> <!-- text-center begins -->
                        
                            <button class="btn btn-primary btn-lg"> <!-- btn btn-primary btn-lg begins -->
                            
                                <i class="fa fa-user-md"></i> Confirm Payment
                            
                            </button> <!-- btn btn-primary btn-lg ends -->
                        
                        </div> <!-- text-center ends -->
                    
                    </form> <!-- form ends -->

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