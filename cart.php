<?php 

$active = "Shopping Cart";
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