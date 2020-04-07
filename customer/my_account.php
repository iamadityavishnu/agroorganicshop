<?php 

include("includes/header.php");

if(isset($_SESSION['customer_email'])){
    $customer_email = $_SESSION['customer_email'];
    $select_customer = "select * from customers where customer_email='$customer_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_name = $row_customer['customer_name'];
    $customer_email = $row_customer['customer_email'];
    $customer_add_1 = $row_customer['customer_address_1'];
    $customer_add_2 = $row_customer['customer_address_2'];
    $customer_city = $row_customer['customer_city'];
    $customer_state = $row_customer['customer_state'];
    $customer_phone = $row_customer['customer_contact'];
    $customer_pincode = $row_customer['customer_pincode'];

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

            <div class="col-md-9"> <!-- col-md-9 begins -->
            
                <?php
                        if(empty($_GET)){
                            echo "
                            <div class='box'> <!-- box begins -->
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-3 my-account-img'>
                                        <img class='img-responsive' src='../images/illustrations/undraw_account_490v.svg'>
                                    </div>
                                    
                                    <div class='col-md-6'>
                                        <h2>Hello, $customer_name</h2>
                                        <h5>Email: <span class='text-muted'>$customer_email<span></h5>
                                        <h5>Address:</h5>
                                        <h5 class='text-muted'>$customer_add_1</h5>
                                        <h5 class='text-muted'>$customer_add_2</h5>
                                        <h5 class='text-muted'>$customer_city</h5>
                                        <h5 class='text-muted'>$customer_state</h5>
                                        <h5 class='text-muted'>$customer_pincode</h5>
                                        <h5>Phone: <span class='text-muted'>$customer_phone</span></h5>
                                    </div>
                                </div>
                            </div>
                            </div> <!-- box ends -->
                            ";
                        }
                ?>
            </div> <!-- col-md-9 ends -->

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

                    <?php 
                    
                    if(isset($_GET['edit_image'])){
                        include('update_profile_picture.php');
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