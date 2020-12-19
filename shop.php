<?php 

$active = "Shop";
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
                
                <?php
                
                if(!isset($_GET['p_cat'])){

                    if(!isset($_GET['cat'])){

                        echo "
                    
                            <div class='box'> <!-- box begins -->

                                <h1>Shop</h1>
                                <p>Shop our best products. 6 items per page</p>

                            </div> <!-- box ends -->

                        ";

                    }

                }

                ?>

                <div class="row"> <!-- row begins -->

                    <?php
                
                    if(!isset($_GET['p_cat'])){

                        if(!isset($_GET['cat'])){

                            $per_page = 6;

                            if(isset($_GET['page'])){

                                $page = $_GET['page'];

                                }
                                else{

                                    $page=1;

                                }

                                $start_from = ($page-1) * $per_page;

                                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

                                $run_products = mysqli_query($con,$get_products);

                                while($row_products=mysqli_fetch_array($run_products)){

                                    $pro_id = $row_products['product_id'];

                                    $pro_title = $row_products['product_title'];

                                    $pro_price = $row_products['product_price'];

                                    $pro_img1 = $row_products['product_img1'];

                                    $stock_status = $row_products['in_stock'];

                                    echo "

                                        <div class='col-md-4 col-sm-6 center-responsive'>
                                        
                                            <div class='product' style='min-height: 70vh'>
                                            
                                                <a href='details.php?pro_id=$pro_id'>
                                                
                                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='$pro_title thumbnail'>
                                                
                                                </a>

                                                <div class='text'>
                                                    <h3>
                                                        <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                                                    </h3>
                                                    <p class='price'>
                                                        Rs. $pro_price
                                                    </p>
                                                    <p class='button'>

                                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                            View Details
                                                        </a>";
                                                        
                                                        if($stock_status==1){
                                                            echo "<a class='btn btn-primary' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>";
                                                        }else{
                                                            echo "<a class='btn btn-warning' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Out of stock</a>";
                                                        }

                                                        echo "
                                                    </p>
                                                </div>
                                            
                                            </div>
                                        
                                        </div>

                                    ";

                                }

                    ?>

                </div> <!-- row ends -->

                <center>
                    <ul class="pagination"> <!-- pagination begins -->
                        
                       <?php

                        $query = "select * from products";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records/$per_page);

                        echo "
                            <li>
                            
                                <a href='shop.php?page=1'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='shop.php?page=".$i."'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='shop.php?page=$total_pages'>".'Last Page'."</a>
                            
                            </li>
                        ";

                            }

                        }

                       ?>

                    </ul> <!-- pagination ends -->
                </center>

                <?php
                
                getpcatpro();
                getcatpro();
                
                ?>

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