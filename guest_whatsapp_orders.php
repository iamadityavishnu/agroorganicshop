<?php

session_start();

include('includes/dbconnect.php');
include('functions/functions.php');

if(isset($_GET['c_id'])){
    $customer_id = $_GET['c_id'];
}

$ip_add = getRealIpUser();

$status = "pending";
$total_amount = 0;

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

$cart_count = mysqli_num_rows($run_cart);

$sl_no = 1;
$products_in_link = "";

if($cart_count != 0){
    while($row_cart = mysqli_fetch_array($run_cart)){
    $pro_id = $row_cart['p_id'];
    $pro_qty = $row_cart['qty'];
    $pro_weight = $row_cart['weight']; // ADD PRICE FROM CART

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
        
        $insert_pending_order = "insert into pending_guest_orders (customer_id, invoice_no, product_id, product_title, amount_paid, date_of_purchase, qty, weight, order_status)
        values('$customer_id','$invoice_no','$pro_id','$product_title','$sub_total',NOW(),'$pro_qty','$pro_weight','$status')";

        $run_pending_order = mysqli_query($con,$insert_pending_order);

        $products_in_link = $products_in_link . $sl_no. ".%20" .$pro_qty. "%20" .$product_title. "%20%28" .$pro_weight. "%29%20-%20%E2%82%B9" .$sub_total. "%0A";

        $total_amount += $sub_total;

        $sl_no = $sl_no + 1;

        $delete_cart = "delete from cart where ip_add='$ip_add'"; //Outside this loop??

        $run_delete_cart = mysqli_query($con,$delete_cart);

        }
    
    }

    $select_customer = "SELECT * FROM guest_customers WHERE customer_id='$customer_id'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);

    $address_in_link = "Total Amount (including shipping charges):%20" .($total_amount+49). "At%3A%0A%0A%2A" .$row_customer[1]. "%2A%0A" .$row_customer[6]. "%0A" .$row_customer[7]. "%0A" .$row_customer[4]. "%0A" .$row_customer[3]. "%0A" .$row_customer[8]. "%0A" .$row_customer[5]. "%0A" .$row_customer[2]. "%0A%0AInvoice%20number%3A" .$invoice_no;

    echo "<script>alert('Your order has been submitted')</script>";

    $whatsapp_link = "https://wa.me/919947189437?text=Hey%2C%20send%20me%3A%0A%0A".$products_in_link. "%0A" .$address_in_link;

    echo "<script>window.open('$whatsapp_link','_self');</script>";

}else{

    echo "<script>alert('Your cart is empty!')</script>";
    echo "<script>window.open('shop.php','_self')</script>";

}

?>
