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

                        <?php
                        $ip_add = getRealIpUser();
                        $select_cart = "select * from cart where ip_add='$ip_add'";
                        $run_cart = mysqli_query($con,$select_cart);
                        $count = mysqli_num_rows($run_cart);
                        ?>

                        <p class="text-muted">You have <?php echo $count; ?> item(s) in your cart</p>
                        <div class="table-responsive"> <!-- table-responsive begins -->
                        
                            <table class="table"> <!-- table begins -->
                            
                                <thead> <!-- thead begins -->
                                
                                    <tr> <!-- tr begins -->
                                        <th class="hidden-xs" colspan="2">Product</th>
                                        <th class="visible-xs-* hidden-sm hidden-md hidden-lg" colspan="1">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Weight</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-total</th>
                                    </tr> <!-- tr ends -->

                                </thead> <!-- thead ends -->

                                <tbody> <!-- tbody begins -->

                                    <?php
                                        $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                            $pro_id = $row_cart['p_id'];
                                            $pro_wt = $row_cart['weight'];
                                            $pro_qty = $row_cart['qty'];

                                            $get_products = "select * from products where product_id='$pro_id'";
                                            $run_products = mysqli_query($con,$get_products);
                                            while($row_products = mysqli_fetch_array($run_products)){
                                                $product_title = $row_products['product_title'];
                                                $product_img1 = $row_products['product_img1'];
                                                $only_price = $row_products['product_price'];
                                                $sub_total = $row_products['product_price']*$pro_qty;
                                                $total += $sub_total;
                                            
                                        
                                    ?>
                                
                                    <tr> <!-- tr begins -->
                                        <td class="hidden-xs">
                                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 4">
                                        </td>
                                        <td>
                                            <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a>
                                        </td>
                                        <td>
                                            <?php echo $pro_qty; ?>
                                        </td>
                                        <td>
                                            <?php echo $only_price; ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_wt; ?>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                        </td>
                                        <td>
                                            &#8377; <?php echo $sub_total; ?>
                                        </td>
                                    </tr> <!-- tr ends -->

                                    <?php } } ?>
                                
                                </tbody> <!-- tbody ends -->

                                <tfoot> <!-- tfoot begins -->
                                
                                    <tr> <!-- tr begins -->
                                    
                                        <th colspan="6" style="text-align:right">Total:</th>
                                        <th colspan="1">&#8377; <?php echo $total; ?></th>
                                    
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

                <?php
                    function update_cart(){
                        global $con;
                        if(isset($_POST['update'])){
                            foreach($_POST['remove'] as $remove_id){
                                $delete_product = "delete from cart where p_id='$remove_id'";
                                $run_delete = mysqli_query($con,$delete_product);
                                if($run_delete){
                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                            }
                        }
                    }
                    echo @$up_cart = update_cart();
                ?>

                <div id="row same-height-row"> <!-- row same-height-row begins -->
                    <div class="col-md-3 col-sm-6 hidden-xs hidden-sm"> <!-- col-md-3 col-sm-6 begins -->
                        <div class="box same-height headline"> <!-- box same-height headline begins -->
                            <h3 class="text-center">Products you may like</h3>
                        </div> <!-- box same-height headline ends -->
                    </div> <!-- col-md-3 col-sm-6 ends -->

                    <?php
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                    $run_products = mysqli_query($con,$get_products);
                    while($row_products = mysqli_fetch_array($run_products)){
                        $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_price = $row_products['product_price'];
                        $pro_img1 = $row_products['product_img1'];

                        echo "

                        <div class='col-md-3 col-sm-6 center-responsive hidden-xs hidden-sm'> <!-- col-md-3 col-sm-6 center-responsive begins -->
                            <div class='product same-height'> <!-- product same-height begins -->
                                <a href='details.php?pro_id=$pro_id'>
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 4'>
                                </a>
                                <div class='text'> <!-- text begins -->
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                    <p class='price'>&#8377; $pro_price</p>
                                </div> <!-- text ends -->
                            </div> <!-- product same-height ends -->
                        </div> <!-- col-md-3 col-sm-6 center-responsive ends -->
                        ";
                    }
                    ?>

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
                                    <th>&#8377; <?php echo $total; ?></th>
                                </tr> <!-- tr ends -->

                                <tr> <!-- tr begins -->
                                    <td>Shipping and handling</td>
                                    <td>Rs. 80</td>
                                    <?php
                                    $shipping_fee = 0;
                                    //to do
                                    ?>
                                </tr> <!-- tr ends -->

                                <tr> <!-- tr begins -->
                                    <td>Tax</td>
                                    <th>Rs. 0</th>
                                </tr> <!-- tr ends -->

                                <tr class="total"> <!-- tr begins -->
                                    <td>Total</td>
                                    <th>&#8377;<?php echo $total; ?></th>
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