<div class="box"> <!-- box begins -->
    <div class="box-header"> <!-- box-header begins -->
        <center> <!-- center begins -->
            <h1>Login</h1>
            <p class="lead">Already have an account?</p>
            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </center> <!-- center ends -->
    </div> <!-- box-header ends -->
    <form method="post" action="checkout.php"> <!-- form begins -->

        <div class="form-group"> <!-- form-group begins -->
            <label>E-mail</label>
            <input type="email" name="c_email" class="form-control" required>
        </div> <!-- form-group ends -->

        <div class="form-group"> <!-- form-group begins -->
            <label>Password</label>
            <input type="password" name="c_pass" class="form-control" required>
        </div> <!-- form-group ends -->

        <div class="text-center"> <!-- text-center begins -->
            <button name="login" value="Login" class="btn btn-primary">
                <i class="fa fa-sign-in"></i> Login
            </button>
        </div> <!-- text-center ends -->

    </form> <!-- form ends -->

    <center> <!-- center begins -->
          <a href="customer_register.php">
            <h3>Don't have an account? Register here</h3>
          </a>
    </center> <!-- center ends -->

</div> <!-- box ends -->

<?php

if(isset($_POST['login'])){
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($con,$select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con,$select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer==0){
        echo "<script>alert('Your email or password is wrong')</script>";
        exit();
    }
    if($check_customer==1 AND $check_cart==0){
        $_SESSION['customer_email'] = $customer_email;
        $_SESSION['customer_name'] = $row_customer['customer_name'];
        $_SESSION['customer_id'] = $row_customer['customer_id'];
        echo "<script>alert('Your are logged in')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    }else{
        $_SESSION['customer_email'] = $customer_email;
        $_SESSION['customer_name'] = $row_customer['customer_name'];
        echo "<script>alert('Your are logged in')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
}

?>