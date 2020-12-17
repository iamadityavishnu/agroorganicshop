<?php 

$active = "My Account";
include("includes/header.php");

$ip_add = getRealIpUser();
$select_cart = "select * from cart where ip_add='$ip_add'";
$run_cart = mysqli_query($con,$select_cart);
$cart_count = mysqli_num_rows($run_cart);

?>

    <div id="content"> <!-- content begins -->
        <div class="container"> <!-- container begins -->
            <div class="col-md-12"> <!-- col-md-12 begins -->

                <ul class="breadcrumb"> <!-- breadcrumb begins -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Register
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3 hidden-xs hidden-sm"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->
                <?php
                    if(!isset($_SESSION['customer_email']) && !isset($_GET['ca_guest'])){
                        include("customer/customer_login.php");
                    }elseif(!isset($_SESSION['customer_email']) && isset($_GET['ca_guest'])){
                        include("guest_checkout.php");
                    }else{
                        include("payment_options.php");
                    }
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