<?php 

include('includes/dbconnect.php'); 

$select_pco = "select * from pending_orders";
$result_pco = mysqli_query($con, $select_pco);
$total_pco = mysqli_num_rows($result_pco);

$select_pgo = "select * from pending_guest_orders";
$result_pgo = mysqli_query($con, $select_pgo);
$total_pgo = mysqli_num_rows($result_pgo);

?>

<div class=""> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>New Orders &#10024;</h1>

    </center> <!-- center ends -->

    <hr>
    <?php
    if(!isset($_GET['guest']) || ($_GET['guest']) == 0){

    ?>
    <div class="table-responsive"> <!-- table-responsive begins -->
        <form style="overflow: hidden" method="post" action="index.php">
            <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
            
                <thead> <!-- thead begins -->
                
                    <tr> <!-- tr begins -->

                        <th>Order ID </th>
                        <th>Invoice No </th>
                        <th>Address </th>
                        <th>Product </th>
                        <th>Quantity </th>
                        <th>Weight </th>
                        <th>Due Amount </th>
                        <th>Order Date </th>
                        <th>Mark as shipped </th>

                    </tr> <!-- tr ends -->

                </thead> <!-- thead ends -->

                <?php

                    $per_page = 6;

                    if(isset($_GET['default_page'])){

                        $page = $_GET['default_page'];

                        }
                        else{

                            $page=1;

                        }

                        $start_from = ($page-1) * $per_page;

                        $select_orders = "select * from pending_orders order by 1 DESC LIMIT $start_from,$per_page";
                        $run_orders = mysqli_query($con,$select_orders);

                        if($run_orders != NULL){
                        
                        while($row_orders = mysqli_fetch_array($run_orders)){

                            $order_id = $row_orders['order_id'];
                            $customer_id = $row_orders['customer_id'];
                            $invoice_no = $row_orders['invoice_no'];
                            $product_id = $row_orders['product_id'];
                            $product_title = $row_orders['product_title'];
                            $amount_paid = $row_orders['amount_paid'];
                            $date_of_purchase = $row_orders['date_of_purchase'];
                            $qty = $row_orders['qty'];
                            $weight = $row_orders['weight'];

                            if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}
            

                            $select_customer = "select customer_name, customer_email, customer_contact, customer_address_1, customer_address_2, customer_city, customer_state, customer_pincode FROM customers WHERE customer_id=$customer_id";
                            $run_customer = mysqli_query($con, $select_customer);

                            $row_customer = mysqli_fetch_array($run_customer);

                            echo "
                            <tbody> <!-- tbody begins -->
                        
                            <tr> <!-- tr begins -->

                                <td>$order_id</td>
                                <td>$invoice_no</td>
                                <td><b>$row_customer[0]</b><br>
                                    $row_customer[3]<br>
                                    $row_customer[4]<br>
                                    $row_customer[5],
                                    $row_customer[6], PIN: 
                                    $row_customer[7]<br> E-mail:
                                    $row_customer[1]<br> Phone:
                                    $row_customer[2]
                                </td>
                                <td>$product_title</td>
                                <td>$qty</td>
                                <td>$weight $weight_unit</td>
                                <td>&#8377; $amount_paid + 49 = 
                                ".($amount_paid + 49)."
                                </td>
                                <td>$date_of_purchase</td>
                                <td><button type='submit' name='shipped[]' value='$order_id'>&#128666 &#9989</button></td>

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
                        ";
                            

                        }


                        } // end of if($run_orders != NULL)

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
                            
                                <a href='index.php?default_page=1&guest=0'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='index.php?default_page=".$i."&guest=0'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='index.php?default_page=$total_pages&guest=0'>".'Last Page'."</a>
                            
                            </li>
                        ";

                    ?>
                    </ul> <!-- pagination ends -->

                    <ul class="pagination"> <!-- pagination begins -->
                        <li>
                            <a style="color: white; background: green" href="index.php?default_page=1&guest=0">Customers
                                (<?php echo $total_pco; ?>)
                            </a>
                        </li>
                        <li>
                            <a href="index.php?default_page=1&guest=1">Guest
                                (<?php echo $total_pgo; ?>)
                            </a>
                        </li>
                    </ul>

                </center>

            </table> <!-- table table-bordered table-hover ends -->
        </form>
    </div> <!-- table-responsive ends -->

    <?php
    }else{ // if($_GET['guest']) == 0)

    ?>

        <div class="table-responsive"> <!-- table-responsive begins -->
            <form style="overflow: hidden" method="post" action="index.php">
                <table class="table table-bordered table-hover"> <!-- table table-bordered table-hover begins -->
                
                    <thead> <!-- thead begins -->
                    
                        <tr> <!-- tr begins -->

                            <th>Order ID </th>
                            <th>Invoice No </th>
                            <th>Address </th>
                            <th>Product </th>
                            <th>Quantity </th>
                            <th>Weight </th>
                            <th>Due Amount </th>
                            <th>Order Date </th>
                            <th>Mark as shipped </th>

                        </tr> <!-- tr ends -->

                    </thead> <!-- thead ends -->

                    <?php

                        $per_page = 6;

                        if(isset($_GET['default_page'])){

                            $page = $_GET['default_page'];

                            }
                            else{

                                $page=1;

                            }

                            $start_from = ($page-1) * $per_page;

                            $select_orders = "select * from pending_guest_orders order by 1 DESC LIMIT $start_from,$per_page";
                            $run_orders = mysqli_query($con,$select_orders);

                            if($run_orders != NULL){
                            
                            while($row_orders = mysqli_fetch_array($run_orders)){

                                $order_id = $row_orders['order_id'];
                                $customer_id = $row_orders['customer_id'];
                                $invoice_no = $row_orders['invoice_no'];
                                $product_id = $row_orders['product_id'];
                                $product_title = $row_orders['product_title'];
                                $amount_paid = $row_orders['amount_paid'];
                                $date_of_purchase = $row_orders['date_of_purchase'];
                                $qty = $row_orders['qty'];
                                $weight = $row_orders['weight'];
                                // $is_guest = $row_orders['guest_customer'];

                                if($weight<1000){$weight_unit = "Grams";}else{ $weight = $weight/1000; $weight_unit = "Kg";}
                

                                $select_customer = "select customer_name, customer_email, customer_contact, customer_address_1, customer_address_2, customer_city, customer_state, customer_pincode FROM guest_customers WHERE customer_id=$customer_id";
                                $run_customer = mysqli_query($con, $select_customer);

                                $row_customer = mysqli_fetch_array($run_customer);

                                echo "
                                <tbody> <!-- tbody begins -->
                            
                                <tr> <!-- tr begins -->

                                    <td>$order_id</td>
                                    <td>$invoice_no</td>
                                    <td><b>$row_customer[0]</b><br>
                                        $row_customer[3]<br>
                                        $row_customer[4]<br>
                                        $row_customer[5],
                                        $row_customer[6], PIN: 
                                        $row_customer[7]<br> E-mail:
                                        $row_customer[1]<br> Phone:
                                        $row_customer[2]
                                    </td>
                                    <td>$product_title</td>
                                    <td>$qty</td>
                                    <td>$weight $weight_unit</td>
                                    <td>&#8377; $amount_paid + 49 = 
                                    ".($amount_paid + 49)."
                                    </td>
                                    <td>$date_of_purchase</td>
                                    <td><button type='submit' name='guest_shipped[]' value='$order_id'>&#128666 &#9989</button></td>

                                </tr> <!-- tr ends -->
                            
                            </tbody> <!-- tbody ends -->
                            ";
                                

                            }


                            } // end of if($run_orders != NULL)

                        ?>

                    </div> <!-- row ends -->

                    <center>
                        
                        <ul class="pagination"> <!-- pagination begins -->
                            
                           <?php

                            $query = "select * from pending_guest_orders";
                            $result = mysqli_query($con,$query);
                            $total_records = mysqli_num_rows($result);
                            $total_pages = ceil($total_records/$per_page);

                            echo "
                                <li>
                                
                                    <a href='index.php?default_page=1&guest=1'>".'First Page'."</a>
                                
                                </li>
                            ";

                            for($i=1; $i<=$total_pages; $i++){
                                echo "
                                    <li>
                                
                                        <a href='index.php?default_page=".$i."&guest=1'>".$i."</a>
                                
                                    </li>
                                ";
                            };

                            echo "
                                <li>
                                
                                    <a href='index.php?default_page=$total_pages&guest=1'>".'Last Page'."</a>
                                
                                </li>
                            ";

                        ?>
                        </ul> <!-- pagination ends -->

                        <ul class="pagination"> <!-- pagination begins -->
                            <li>
                                <a href="index.php?default_page=1&guest=0">Customer
                                        (<?php echo $total_pco; ?>)
                                </a>
                            </li>
                            <li>
                                <a style="color: white; background: green" href="index.php?default_page=1&guest=1">Guest 
                                    (<?php echo $total_pgo; ?>)
                                </a>
                            </li>
                        </ul>

                    </center>

                </table> <!-- table table-bordered table-hover ends -->
            </form>
        </div> <!-- table-responsive ends -->

        <?php
            
        }  
        ?>

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
    }elseif(isset($_POST['guest_shipped'])){
        echo "<script>alert('Marking order ID " . $_POST['guest_shipped'][0] . " as shipped');</script>";
        foreach($_POST['guest_shipped'] as $shipped_order_id){

            $update_order = "update guest_customer_orders SET order_status='shipped' WHERE order_id=$shipped_order_id";
            $run_update_order = mysqli_query($con, $update_order);

            $delete_order = "delete from pending_guest_orders where order_id='$shipped_order_id'";
            $run_delete = mysqli_query($con, $delete_order);
            if($run_delete){
                echo "<script>window.open('index.php?default_page=1&guest=1','_self')</script>";
            }
        }
    }

?>