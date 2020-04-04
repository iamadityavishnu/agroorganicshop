<?php 

include("includes/header.php");

if(isset($_SESSION['customer_email'])){
    $customer_email = $_SESSION['customer_email'];
    $select_customer = "select * from customers where customer_email='$customer_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_name = $row_customer['customer_name'];
    $customer_email = $row_customer['customer_email'];
    $customer_address = $row_customer['customer_address'];
    $customer_city = $row_customer['customer_city'];
    $customer_state = $row_customer['customer_state'];
    $customer_phone = $row_customer['customer_contact'];

}

?>

    <div id="content"> <!-- content begins -->
        <div class="container"> <!-- container begins -->
            <div class="col-md-12"> <!-- col-md-12 begins -->

                <ul class="breadcrumb"> <!-- breadcrumb begins -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <?php
                    if(empty($_GET)){
                        echo "
                        <div class='col-md-9 box'>
                            <div class='col-md-3'>
                                <img class='img-responsive' src='../images/illustrations/undraw_account_490v.svg'>
                            </div>
                            
                            <div class='col-md-6'>
                                <h2>Hello $customer_name</h2>
                                <h4 class='text-muted'>Email: $customer_email</h4>
                                <h4 class='text-muted'>Address: $customer_address</h4>
                                <h4 class='text-muted'>$customer_city</h4>
                                <h4 class='text-muted'>$customer_state</h4>
                                <h4 class='text-muted'>Phone: $customer_phone</h4>
                            </div>
                        </div>
                        ";
                    }
            ?>

            <div class="col-md-9"> <!-- col-md-9 begins -->
            
                <!-- box begins -->
                
                    <?php 
                    
                    if(isset($_GET['my_orders'])){
                        include('my_orders.php');
                    }
                    
                    ?>

                    <?php 
                    
                    if(isset($_GET['pay_offline'])){
                        include('pay_offline.php');
                    }
                    
                    ?>

                    <?php 
                    
                    if(isset($_GET['edit_account'])){
                        include('edit_account.php');
                    }
                    
                    ?>

                    <?php 
                    
                    if(isset($_GET['change_pass'])){
                        include('change_pass.php');
                    }
                    
                    ?>

                    <?php 
                    
                    if(isset($_GET['delete_account'])){
                        include('delete_account.php');
                    }
                    
                    ?>
                
                <!-- box ends -->
            
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