<?php 

include('includes/dbconnect.php'); 

$select_co = "select * from customer_orders WHERE order_status = 'shipped'";
$result_co = mysqli_query($con, $select_co);
$total_co = mysqli_num_rows($result_co);

$select_gco = "select * from guest_customer_orders WHERE order_status = 'shipped'";
$result_gco = mysqli_query($con, $select_gco);
$total_gco = mysqli_num_rows($result_gco);

?>

<div class=""> <!-- box begins --> 
    <center> <!-- center begins -->

        <h1>Shipped Orders &#128666;</h1>

    </center> <!-- center ends -->

    <hr>

    <?php
    if(!isset($_GET['guest']) || ($_GET['guest']) == 0){

    ?>

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
                                <td><button type='submit' name='delivered[]' value='$order_id'>&#128230 &#9989</button></td>
                                

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
                        ";

                        }

                    ?>

                </div> <!-- row ends -->

                <center>

                    <ul class="pagination"> <!-- pagination begins -->
                        <li>
                            <a style="color: white; background: green" href="index.php?shipped_orders&page=1&guest=0">Customers
                                (<?php echo $total_co; ?>)
                            </a>
                        </li>
                        <li>
                            <a href="index.php?shipped_orders&page=1&guest=1">Guest
                                (<?php echo $total_gco; ?>)
                            </a>
                        </li>
                    </ul>

                    <ul class="pagination"> <!-- pagination begins -->
                        
                       <?php

                        $query = "select * from customer_orders WHERE order_status='shipped'";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records/$per_page);

                        echo "
                            <li>
                            
                                <a href='index.php?shipped_orders&page=1&guest=0'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='index.php?shipped_orders&page=".$i."&guest=0'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='index.php?shipped_orders&page=$total_pages&guest=0'>".'Last Page'."</a>
                            
                            </li>
                        ";

                    ?>
                    </ul> <!-- pagination ends -->
                </center>

            </table> <!-- table table-bordered table-hover ends -->
        </form>
    </div> <!-- table-responsive ends -->


<?php

}else{ // if($_GET['guest']) == 0)

?>

<div class="table-responsive"> <!-- table-responsive begins -->
        <form style="overflow: hidden" method="post" action="index.php?shipped_orders&guest=1">
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

                        $select_orders = "select * from guest_customer_orders WHERE order_status='shipped' order by 1 DESC LIMIT $start_from,$per_page";
                        $run_orders = mysqli_query($con, $select_orders);
                        
                        while($row_orders = mysqli_fetch_array($run_orders)){

                            $order_id = $row_orders['order_id'];
                            $customer_id = $row_orders['customer_id'];
                            $invoice_no = $row_orders['invoice_no'];
                            $product_id = $row_orders['product_id'];
                            $product_title = $row_orders['product_title'];
                            $qty = $row_orders['qty'];
                            $weight = $row_orders['weight'];

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
                                <td><button type='submit' name='guest_delivered[]' value='$order_id'>&#128230 &#9989</button></td>
                                

                            </tr> <!-- tr ends -->
                        
                        </tbody> <!-- tbody ends -->
                        ";

                        }

                    ?>

                </div> <!-- row ends -->

                <center>

                    <ul class="pagination"> <!-- pagination begins -->
                            <li>
                                <a href="index.php?shipped_orders&page=1&guest=0">Customer
                                        (<?php echo $total_co; ?>)
                                </a>
                            </li>
                            <li>
                                <a style="color: white; background: green" href="index.php?shipped_orders&page=1&guest=1">Guest 
                                    (<?php echo $total_gco; ?>)
                                </a>
                            </li>
                    </ul>

                    <ul class="pagination"> <!-- pagination begins -->
                        
                       <?php

                        $query = "select * from guest_customer_orders WHERE order_status='shipped'";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records/$per_page);

                        echo "
                            <li>
                            
                                <a href='index.php?shipped_orders&page=1&guest=1'>".'First Page'."</a>
                            
                            </li>
                        ";

                        for($i=1; $i<=$total_pages; $i++){
                            echo "
                                <li>
                            
                                    <a href='index.php?shipped_orders&page=".$i."&guest=1'>".$i."</a>
                            
                                </li>
                            ";
                        };

                        echo "
                            <li>
                            
                                <a href='index.php?shipped_orders&page=$total_pages&guest=1'>".'Last Page'."</a>
                            
                            </li>
                        ";

                    ?>
                    </ul> <!-- pagination ends -->
                </center>

            </table> <!-- table table-bordered table-hover ends -->
        </form>
    </div> <!-- table-responsive ends -->

    <?php

    }

    ?>

</div> <!-- box ends -->

<?php

    if(isset($_POST['delivered'])){
        echo "<script>alert('Marking order ID " . $_POST['delivered'][0] . " as delivered');</script>";
        foreach($_POST['delivered'] as $delivered_order_id){

            $update_order = "update customer_orders SET order_status='delivered' WHERE order_id=$delivered_order_id";
            $run_update_order = mysqli_query($con, $update_order);
            echo "<script>window.open('index.php?shipped_orders','_self')</script>";
        }
    }elseif(isset($_POST['guest_delivered'])){
        echo "<script>alert('Marking order ID " . $_POST['guest_delivered'][0] . " as delivered');</script>";
        foreach($_POST['guest_delivered'] as $delivered_order_id){

            $update_order = "update guest_customer_orders SET order_status='delivered' WHERE order_id=$delivered_order_id";
            $run_update_order = mysqli_query($con, $update_order);
            echo "<script>window.open('index.php?shipped_orders&page=1&guest=1','_self')</script>";
        }
    }

?>
