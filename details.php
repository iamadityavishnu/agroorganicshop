<?php 

$active = "Home";
include("includes/header.php"); 

?>

    <div id="content"> <!-- content begins -->
        <div class="container"> <!-- container begins -->
            <div class="col-md-12"> <!-- col-md-12 begins -->

                <ul class="breadcrumb"> <!-- breadcrumb begins -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->
                <div id="productMain" class="row"> <!-- productMain row begins -->
                    <div class="col-sm-6"> <!-- col-sm-6 begins -->
                        <div id="mainImage"> <!-- mainImage begins -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- myCarousel carousel slide begins -->

                                <ol class="carousel-indicators"> <!-- carousel-indicators begins -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol> <!-- carousel-indicators ends -->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Image Front"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Image Side"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Image Back"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control begins -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a> <!-- left carousel-control ends -->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control begins -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a> <!-- right carousel-control ends -->

                            </div> <!-- myCarousel carousel slide ends -->
                        </div> <!-- mainImage ends -->
                    </div> <!-- col-sm-6 ends -->

                    <div class="col-sm-6"> <!-- col-sm-6 begins -->
                        <div class="box"> <!-- box begins -->
                            <h1 class="text-center">Turmeric Powder</h1>

                            <form action="details.php" class="form-horizontal" method="post"> <!-- form-horizontal begins -->
                                <div class="form-group"> <!-- form begins -->
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>

                                    <div class="col-md-7"> <!-- col-md-7 begins -->
                                        <select name="product_qty" id="" class="form-control"> <!-- form-control begins -->
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select> <!-- form-control ends -->
                                    </div> <!-- col-md-7 ends -->
                                    
                                </div> <!-- form-group ends -->

                                <div class="form-group"> <!-- form-group begins -->

                                    <label class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7"> <!-- col-md-7 begins -->
                                        <select name="product_size" id="" class="form-control"> <!-- form-control begins -->
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value="">L</option>
                                        </select> <!-- form-control ends -->
                                    </div> <!-- col-md-7 ends -->

                                </div> <!-- form-group ends -->

                                <p class="price">Rs. 250</p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>
                                </p>

                            </form> <!-- form-horizontal ends -->

                        </div> <!-- box ends -->

                        <div class="row" id="thumbs"> <!-- row ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="0" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Front" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="1" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Side" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="2" src="admin_area/product_images/product-thumbnail3.jpg" alt="Product Back" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                        </div> <!-- row ends -->

                    </div> <!-- col-sm-6 ends -->

                </div> <!-- productMain row ends -->

                <div class="box" id="details"> <!-- box begins -->

                    <h4>Product Details</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi ullam facere libero corrupti facilis aut doloremque minima dolores beatae quibusdam fugiat explicabo laborum excepturi debitis, non expedita molestiae. Facere, sequi.</p>

                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

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

        </div> <!-- container ends -->
    </div> <!-- content ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>