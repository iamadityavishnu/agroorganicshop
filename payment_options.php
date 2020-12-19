<div class="box">

    <?php
        $session_email = $_SESSION['customer_email'];
        $select_customer = "select * from customers where customer_email='$session_email'";
        $run_customer = mysqli_query($con,$select_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_id = $row_customer['customer_id'];
    ?>

    <h1 class="text-center">Checkout</h1>

    <br>

    <!-- <center>
        <p class="text-muted" style="width: 80%;">
            Click on "Place Order".
        </p>
    </center> -->

    <br>
    
    <center>
    <p class="lead text-center">

        <a class="btn btn-primary" href="whatsapp_order.php?c_id=<?php echo $customer_id; ?>">
            <i class="fa fa-whatsapp"></i><b> Order via WhatsApp</b>
        </a>
        <br>
        
        <p class="text text-muted">- or -</p>

        <br>
        <a class="btn btn-primary" href="orders.php?c_id=<?php echo $customer_id; ?>">
            <b>Place Order Directly</b>
        </a>

    </p>
    </center>

    <center>
        <a href="orders.php?c_id=<?php echo $customer_id; ?>"><img class="img-responsive" width="350px" src="images/illustrations/urban-685.png"></a>
    </center>
    <br>

    <!-- <center>
        <p class="lead">
            <a class="btn btn-default" href="#">
            Order
            <img src="" alt="" class="img-responsive">
            </a>
        </p>
    </center> -->

</div>