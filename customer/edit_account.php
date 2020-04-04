<?php
    if(isset($_SESSION['customer_email'])){
        $customer_email = $_SESSION['customer_email'];
        $select_customer = "select * from customers where customer_email='$customer_email'";
        $run_customer = mysqli_query($con,$select_customer);
        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['customer_id'];
        $customer_name = $row_customer['customer_name'];
        $customer_email = $row_customer['customer_email'];
        $customer_state = $row_customer['customer_state'];
        $customer_city = $row_customer['customer_city'];
        $customer_contact = $row_customer['customer_contact'];
        $customer_address = $row_customer['customer_address'];

    }
?>

<div class="box"> <!-- box begins --> 
    <h1 align="center">Edit your account</h1>

    <?php if(isset($_POST['update'])){ echo "<h2 align='center' style='color:green'>Updated Succesfully</h2>";} ?>

    <form action="" method="post" enctype="multipart/form-data"> <!-- from begins -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Name</label>
            <input type="text" name="c_name" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $_SESSION['customer_name'];} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Email</label>
            <input type="email" name="c_email" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $_SESSION['customer_email'];} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Phone</label>
            <input type="number" name="c_phone" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_contact;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Address</label>
            <input type="text" name="c_address" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_address;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>City</label>
            <input type="text" name="c_city" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_city;} ?>" required>

        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->

            <label>State</label>
            <input type="text" name="c_state" class="form-control" value="<?php if(isset($_SESSION['customer_email'])){ echo $customer_state;} ?>" required>

        </div> <!-- form-group ends -->

        <!-- <div class="form-group"> --> <!-- form-group begins -->

            <!-- <label>Profile Picture</label>
            <input type="file" name="c_image" class="form-control form-height-custom" required>
            <img class="img-responsive" src="customer_images/IMG_8426.png" width="50px" alt="Profile picture"> -->

        <!-- </div> --> <!-- form-group ends -->

        <div class="text-center"> <!-- text-center begins -->

            <button name="update" class="btn btn-primary"> <!-- btn btn-primary begins -->

                <i class="fa fa-user-md"></i> Update profile

            </button> <!-- btn btn-primary ends -->

        </div> <!-- text-center ends -->

    </form> <!-- from ends -->
</div> <!-- box ends -->

<?php
    if(isset($_POST['update'])){

        $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
        $c_phone = $_POST['c_phone'];
        $c_address = $_POST['c_address'];
        $c_city = $_POST['c_city'];
        $c_state = $_POST['c_state'];

        $update_customer = "update customers
        set customer_name='$c_name',
        customer_email='$c_email',
        customer_state='$c_state',
        customer_city='$c_city',
        customer_contact='$c_phone',
        customer_address='$c_address'
        WHERE customer_id='$customer_id'";

        $run_update_customer = mysqli_query($con,$update_customer);
    }
?>