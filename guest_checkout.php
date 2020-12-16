<div class="box"> <!-- box begins --> 
    <h1 align="center">Fill your address</h1>

    <?php if(isset($_POST['update'])){ echo "<h2 align='center' style='color:green'>Updated Succesfully</h2>";} ?>

    <form action="" method="post" enctype="multipart/form-data"> <!-- from begins -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Name<su style="color: red;">*</su></label>
            <input type="text" name="c_name" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $_SESSION['customer_name'];} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Email<su style="color: red;">*</su></label>
            <input type="email" name="c_email" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $_SESSION['customer_email'];} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Phone<su style="color: red;">*</su></label>
            <input type="number" name="c_phone" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_contact;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Address Line 1<su style="color: red;">*</su></label>
            <input type="text" name="c_address_1" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_address_1;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Address Line 2<su style="color: red;">*</su></label>
            <input type="text" name="c_address_2" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_address_2;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>City<su style="color: red;">*</su></label>
            <input type="text" name="c_city" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_city;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>State<su style="color: red;">*</su></label>
            <input type="text" name="c_state" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_state;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Postal Code<su style="color: red;">*</su></label>
            <input type="number" name="c_pincode" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_pincode;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="text-center"> <!-- text-center begins -->

            <button name="place_order" class="btn btn-primary"> <!-- btn btn-primary begins -->

                <i class="fa fa-user-md"></i> Place order

            </button> <!-- btn btn-primary ends -->

        </div> <!-- text-center ends -->

    </form> <!-- from ends -->
</div> <!-- box ends -->

<?php

if(isset($_POST['place_order'])){
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_phone = $_POST['c_phone'];
    $c_address_1 = $_POST['c_address_1'];
    $c_address_2 = $_POST['c_address_2'];
    $c_city = $_POST['c_city'];
    $c_state = $_POST['c_state'];
    $c_pincode = $_POST['c_pincode'];
    $c_ip = getRealIpUser();

    $insert_customer = "insert into guest_customers (customer_name, customer_email, customer_state, customer_city, customer_contact, customer_address_1, customer_address_2, customer_pincode, customer_ip) values('$c_name','$c_email','$c_state','$c_city', '$c_phone', '$c_address_1', '$c_address_2', '$c_pincode','$c_ip')";

    $run_customer = mysqli_query($con,$insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);

    $select_customer = "select * from guest_customers where customer_email='$c_email'";
    $run_customer = mysqli_query($con,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];

    if($check_cart>0){
        //If registered with item in cart
        echo "<script>window.open('guest_orders.php?c_id=".$customer_id."','_self')</script>";
    }
}

?>