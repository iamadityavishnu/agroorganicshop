<?php include('includes/dbconnect.php'); ?>

<div class=""> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>New Orders &#10024;</h1>

    </center> <!-- center ends -->

    <hr>

    <div class="table-responsive"> <!-- table-responsive begins -->
        <form style="overflow: hidden" method="post" action="index.php">
            <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
            
                <thead> <!-- thead begins -->
                
                    <tr> <!-- tr begins -->

                        <th>Order ID </th>
                        <th>Invoice No </th>
                        <th>Product </th>
                        <th>Quantity </th>
                        <th>Weight </th>
                        <th>Amount Paid </th>
                        <th>Order Date </th>
                        <th>Mark as shipped </th>

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

                        $select_orders = "select * from pending_orders order by 1 DESC LIMIT $start_from,$per_page";
                        $run_orders = mysqli_query($con,$select_orders);
                        
                        while($row_orders = mysqli_fetch_array($run_orders)){

                            $order_id = $row_orders['order_id'];
                            $customer_id = $row_orders['customer_id'];
                            $invoice_no = $row_orders['invoice_no'];
                            $product_id = $row_orders['product_id'];
                            $product_title = $row_orders['product_title'];
                            $amount_paid = $row_orders['amount_paid'];
                            $date_of_purchase = $row_orders['date_of_purchase'];
                            $qty = $row_orders['qty'];
                            // $status = ucfirst($row_orders['order_status']);
                            $weight = $row_orders['weight'];
                            // $p_title = $row_orders['product_title'];
                            // $p_img = $row_orders['product_thumbnail'];

                            if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}
                            
                            echo "
                            <tbody> <!-- tbody begins -->
                        
                            <tr> <!-- tr begins -->

                                <td>$order_id</td>
                                <td>$invoice_no</td>
                                <td>$product_title</td>
                                <td>$qty</td>
                                <td>$weight $weight_unit</td>
                                <td>&#8377; $amount_paid</td>
                                <td>$date_of_purchase</td>
                                <td><button type='submit' name='shipped[]' value='$order_id'>&#128666 &#9989</button></td>

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
                        ";

                        }

                    ?>

                </div> <!-- row ends -->

                <center>
                    <ul class="pagination"> <!-- pagination begins -->
                        
                       <?php

                        $query = "select * from pending_orders";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records/$per_page);

                        echo "
                            <li>
                            
                                <a href='index.php?page=1'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='index.php?page=".$i."'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='index.php?page=$total_pages'>".'Last Page'."</a>
                            
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

    if(isset($_POST['shipped'])){
        echo "<script>alert('Marking order ID " . $_POST['shipped'][0] . " as shipped');</script>";
        foreach($_POST['shipped'] as $shipped_order_id){

            $update_order = "update customer_orders SET order_status='shipped' WHERE order_id=$shipped_order_id";
            $run_update_order = mysqli_query($con, $update_order);

            $delete_order = "delete from pending_orders where order_id='$shipped_order_id'";
            $run_delete = mysqli_query($con, $delete_order);
            if($run_delete){
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }

?>