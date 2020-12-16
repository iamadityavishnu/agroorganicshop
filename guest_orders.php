<?php

session_start();

include('includes/dbconnect.php');
include('functions/functions.php');

if(isset($_GET['c_id'])){
    $customer_id = $_GET['c_id'];
}

$ip_add = getRealIpUser();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    $pro_id = $row_cart['p_id'];
    $pro_qty = $row_cart['qty'];
    $pro_weight = $row_cart['weight'];

    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){
        $sub_total = $row_products['product_price']*$pro_qty;
        $product_id = $row_products['product_id'];
        $product_title = $row_products['product_title'];
        $product_thumb = $row_products['product_img1'];
        $insert_customer_order = "insert into guest_customer_orders (customer_id, product_id, product_title, product_thumbnail, due_amount, invoice_no, qty, weight, order_date, order_status)
        values('$customer_id','$product_id','$product_title','$product_thumb','$sub_total','$invoice_no','$pro_qty','$pro_weight',NOW(),'$status')";
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        
        $insert_pending_order = "insert into pending_orders (customer_id, invoice_no, product_id, product_title, amount_paid, date_of_purchase, qty, weight, order_status, guest_customer)
        values('$customer_id','$invoice_no','$pro_id','$product_title','$sub_total',NOW(),'$pro_qty','$pro_weight','$status', '1')";

        $run_pending_order = mysqli_query($con,$insert_pending_order);

        $delete_cart = "delete from cart where ip_add='$ip_add'";

        $run_delete_cart = mysqli_query($con,$delete_cart);

        echo "<script>alert('Your order has been submitted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>