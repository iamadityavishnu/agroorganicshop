<?php include('includes/dbconnect.php'); ?>

<div class=""> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>All products 🛍️ </h1>

    </center> <!-- center ends -->

    <hr>

    <div class="table-responsive"> <!-- table-responsive begins -->
        <form style="overflow: hidden" method="post" action="">
            <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
            
                <thead> <!-- thead begins -->
                
                    <tr> <!-- tr begins -->

                        <th>Product ID </th>
                        <th>Category ID </th>
                        <th>Last updated </th>
                        <th>Product </th>
                        <th>Weights (in gms)</th>
                        <th>Price </th>
                        <th>Keywords </th>
                        <th>Description </th>
                        <th>Manage stock </th>

                    </tr> <!-- tr ends -->

                </thead> <!-- thead ends -->

                <?php

                    $per_page = 6;

                    if(isset($_GET['page'])){

                        $page = $_GET['page'];

                        }
                        else{

                            $page=1;

                        }

                        $start_from = ($page-1) * $per_page;

                        $select_orders = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                        $run_orders = mysqli_query($con,$select_orders);
                        
                        while($row_orders = mysqli_fetch_array($run_orders)){

                            $product_id = $row_orders['product_id'];
                            $p_cat_id = $row_orders['p_cat_id'];
                            $date = $row_orders['date'];
                            $product_title = $row_orders['product_title'];
                            $product_img1 = $row_orders['product_img1'];
                            $product_wt1 = $row_orders['product_wt1'];
                            $product_wt2 = $row_orders['product_wt2'];
                            $product_wt3 = $row_orders['product_wt3'];
                            $product_price = $row_orders['product_price'];
                            $product_price2 = $row_orders['product_price2'];
                            $product_price3 = $row_orders['product_price3'];
                            $product_keywords = $row_orders['product_keywords'];
                            $product_desc = $row_orders['product_desc'];
                            $stock_status = $row_orders['in_stock'];

                            // if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}
                            
                            
                            echo "
                            <tbody> <!-- tbody begins -->
                        
                            <tr> <!-- tr begins -->

                                <td>$product_id</td>
                                <td>$p_cat_id</td>
                                <td>$date</td>
                                <td><img src='product_images/$product_img1' alt='product_img' height='80px'><br>
                                    $product_title</td>
                                <td>$product_wt1 <br><br>
                                    $product_wt2 <br><br>
                                    $product_wt3 
                                </td>
                                <td>&#8377; $product_price <br><br>
                                    &#8377; $product_price2 <br><br>
                                    &#8377; $product_price3
                                </td>
                                <td>$product_keywords</td>
                                <td>$product_desc</td>
                                ";

                                if ($stock_status==1){
                                    echo "<td><button class='stock-out-btn' type='submit' name='stock_out[]' value='$product_id'>Mark as Stock out</button></td>";
                                }else{
                                    echo "<td><button class='stock-in-btn' type='submit' name='stock_in[]' value='$product_id'>Mark as Stock in</button></td>";
                                }

                                echo "

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
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
                            
                                <a href='index.php?all_products&page=1'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='index.php?all_products&page=".$i."'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='index.php?all_products&page=$total_pages'>".'Last Page'."</a>
                            
                            </li>
                        ";

                    ?>
                    </ul> <!-- pagination ends -->
                </center>

            </table> <!-- table table-bordered table-hover ends -->
        </form>
    </div> <!-- table-responsive ends -->
</div> <!-- box ends -->


<?php

    if(isset($_POST['stock_out'])){
        echo "<script>alert('Marking product ID " . $_POST['stock_out'][0] . " as OOS');</script>";
        foreach($_POST['stock_out'] as $stock_out_p_id){

            $update_order = "update products SET in_stock=0 WHERE product_id=$stock_out_p_id";
            $run_update_order = mysqli_query($con, $update_order);

            if($run_update_order){
                echo "<script>window.open('index.php?all_products','_self')</script>";
            }else{
                echo "<script>alert('Could not update')</script>";
            }
        }
    }elseif(isset($_POST['stock_in'])){
        echo "<script>alert('Marking product ID " . $_POST['stock_in'][0] . " as in stock');</script>";
        foreach($_POST['stock_in'] as $stock_out_p_id){

            $update_order = "update products SET in_stock=1 WHERE product_id=$stock_out_p_id";
            $run_update_order = mysqli_query($con, $update_order);

            if($run_update_order){
                echo "<script>window.open('index.php?all_products','_self')</script>";
            }else{
                echo "<script>alert('Could not update')</script>";
            }
        }
    }

?>