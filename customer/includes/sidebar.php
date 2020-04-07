<?php
    if(isset($_SESSION['customer_email'])){
        $customer_email = $_SESSION['customer_email'];
        $select_customer = "select * from customers where customer_email='$customer_email'";
        $run_customer = mysqli_query($con,$select_customer);
        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['customer_id'];
        $customer_name = $row_customer['customer_name'];
        $customer_image = $row_customer['customer_image'];
    }
?>

<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu begins -->

    <div class="panel-heading"> <!-- panel-heading begins -->
    
        <center> <!-- center begins -->

            <div class="center-cropped" style="background-image: url('customer_images/<?php echo $customer_image; ?>');">
            <!-- PROFILE PICTURE PART -->  
            </div>
            <a href="my_account.php?edit_image">
                <div class="edit-profile-pic" data-toggle="tooltip" title="Edit Profile Picture"><i class="fa fa-camera"></i></div>
            </a>
        
        </center> <!-- center ends -->

        <br>

        <h3 align="center" class="panel-heading"> <!-- panel-heading begins --> <!-- class="panel-title" -->
        
            <?php echo $customer_name; ?>
        
        </h3> <!-- panel-heading ends -->
    
    </div> <!-- panel-heading ends -->

    <div class="panel-body"> <!-- panel-body begins -->
    
        <ul class="nav-pills nav-stacked nav"> <!-- nav-pills nav-stacked nav begins -->
        
            <li class="<?php if(isset($_GET['my_orders'])){echo("active");} ?>">
            
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>

            </li>

            <li class="<?php if(isset($_GET['pay_offline'])){echo("active");} ?>">
            
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                </a>

            </li>

            <li class="<?php if(isset($_GET['edit_account'])){echo("active");} ?>">
            
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Edit Account
                </a>

            </li>

            <li class="<?php if(isset($_GET['change_pass'])){echo("active");} ?>">
            
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>

            </li>

            <li class="<?php if(isset($_GET['delete_account'])){echo("active");} ?>">
            
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Delete Account
                </a>

            </li>

            <li>
            
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i> Logout
                </a>

            </li>
        
        </ul> <!-- nav-pills nav-stacked nav ends -->
    
    </div> <!-- panel-body ends -->

</div> <!-- panel panel-default sidebar-menu ends -->