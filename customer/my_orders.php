<div class="box"> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>My Orders</h1>

        <p class="lead">All your orders appear here</p>

        <p class="text-muted">
            Feel free to <a href="../contact.php">contact us</a> 24/7 in case of any queries. 
        </p>

    </center> <!-- center ends -->

    <hr>

    <div class="table-responsive"> <!-- table-responsive begins -->

        <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
        
            <thead> <!-- thead begins -->
            
                <tr> <!-- tr begins -->

                    <th>Invoice No </th>
                    <th>Product </th>
                    <th>Qty </th>
                    <th>Weight </th>
                    <th>Amount Paid </th>
                    <th>Order Date </th>
                    <th>Order Status </th>

                </tr> <!-- tr ends -->

            </thead> <!-- thead ends -->

            <?php

            $customer_email = $_SESSION['customer_email'];

            $select_customer = "select * from customers WHERE customer_email='$customer_email'";
            $run_customers = mysqli_query($con,$select_customer);
            $row_customers = mysqli_fetch_array($run_customers);
            $customer_id = $row_customers['customer_id'];

            $select_orders = "select * from customer_orders WHERE customer_id=$customer_id";
            $run_orders = mysqli_query($con,$select_orders);
            
            while($row_orders = mysqli_fetch_array($run_orders)){

                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $qty = $row_orders['qty'];
                $weight = $row_orders['weight'];
                $order_date = $row_orders['order_date'];
                $status = ucfirst($row_orders['order_status']);
                $p_id = $row_orders['product_id'];
                $p_title = $row_orders['product_title'];
                $p_img = $row_orders['product_thumbnail'];

                if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}
                
                echo "<tbody> <!-- tbody begins -->
            
                <tr> <!-- tr begins -->
                    <td>$invoice_no</td>
                    <td><a href='../details.php?pro_id=$p_id'><img src='../admin_area/product_images/$p_img' height='40px' width='40px'> $p_title</a></td>
                    <td>$qty</td>
                    <td>$weight $weight_unit</td>
                    <td>&#8377; $due_amount</td>
                    <td>$order_date</td>
                    <td>$status</td>

                </tr> <!-- tr ends -->
            
            </tbody> <!-- tbody ends -->
            ";

            }

            ?>

        </table> <!-- table table-bordered table-hover ends -->

    </div> <!-- table-responsive ends -->
</div> <!-- box ends -->