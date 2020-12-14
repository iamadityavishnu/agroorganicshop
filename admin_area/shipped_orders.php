<?php include('includes/dbconnect.php'); ?>

<div class=""> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>Shipped Orders &#128666;</h1>

    </center> <!-- center ends -->

    <hr>

    <div class="table-responsive"> <!-- table-responsive begins -->
        <form style="overflow: hidden" method="post" action="index.php?shipped_orders">
            <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
            
                <thead> <!-- thead begins -->
                
                    <tr> <!-- tr begins -->

                        <th>Order ID </th>
                        <th>Invoice No </th>
                        <th>Customer Details </th>
                        <th>Product </th>
                        <th>Quantity </th>
                        <th>Weight </th>
                        <th>Mark delivered</th>

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

                        $select_orders = "select * from customer_orders WHERE order_status='shipped' order by 1 DESC LIMIT $start_from,$per_page";
                        $run_orders = mysqli_query($con, $select_orders);
                        
                        while($row_orders = mysqli_fetch_array($run_orders)){

                            $order_id = $row_orders['order_id'];
                            $customer_id = $row_orders['customer_id'];
                            $invoice_no = $row_orders['invoice_no'];
                            $product_id = $row_orders['product_id'];
                            $product_title = $row_orders['product_title'];
                            // $amount_paid = $row_orders['amount_paid'];
                            // $date_of_purchase = $row_orders['date_of_purchase'];
                            $qty = $row_orders['qty'];
                            // $status = ucfirst($row_orders['order_status']);
                            $weight = $row_orders['weight'];
                            // $p_title = $row_orders['product_title'];
                            // $p_img = $row_orders['product_thumbnail'];

                            if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}

                            $select_customer = "select customer_name, customer_email, customer_city, customer_contact, customer_pincode FROM customers WHERE customer_id=$customer_id";
                            $run_customer = mysqli_query($con, $select_customer);

                            $row_customer = mysqli_fetch_array($run_customer);

                            echo "
                            <tbody> <!-- tbody begins -->
                        
                            <tr> <!-- tr begins -->

                                <td>$order_id</td>
                                <td>$invoice_no</td>
                                <td>$row_customer[0]<br>
                                    $row_customer[1]<br>
                                    $row_customer[2]<br>
                                    $row_customer[3]<br>
                                    $row_customer[4]
                                </td>
                                <td>$product_title</td>
                                <td>$qty</td>
                                <td>$weight $weight_unit</td>
                                <td><button type='submit' name='delivered[]' value='$order_id'>&#128230 &#9989</button></td>
                                

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
                        ";

                        }

                    ?>

                </div> <!-- row ends -->

                <center>
                    <ul class="pagination"> <!-- pagination begins -->
                        
                       <?php

                        $query = "select * from customer_orders";
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

    if(isset($_POST['delivered'])){
        echo "<script>alert('Marking order ID " . $_POST['delivered'][0] . " as delivered');</script>";
        foreach($_POST['delivered'] as $delivered_order_id){

            $update_order = "update customer_orders SET order_status='delivered' WHERE order_id=$delivered_order_id";
            $run_update_order = mysqli_query($con, $update_order);
            // $delete_order = "delete from pending_orders where order_id='$shipped_order_id'";
            // $run_delete = mysqli_query($con, $delete_order);
            // if($run_delete){
            echo "<script>window.open('index.php?shipped_orders','_self')</script>";
            // }
        }
    }

?>