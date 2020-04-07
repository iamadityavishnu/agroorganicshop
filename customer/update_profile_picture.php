
<div class="box"> <!-- box begins --> 
    <h1 align="center">Update profile picture</h1>

    <form action="" method="post" enctype="multipart/form-data"> <!-- from begins -->

        <div class="form-group"> <!-- form-group begins -->

            <label>Upload new picture</label>
            <input type="file" name="c_profile_pic" class="form-control form-height-custom" required>

        </div> <!-- form-group ends -->

        <div class="text-center"> <!-- text-center begins -->

            <button name="update" class="btn btn-primary"> <!-- btn btn-primary begins -->

                <i class="fa fa-user-md"></i> Update

            </button> <!-- btn btn-primary ends -->

        </div> <!-- text-center ends -->

    </form> <!-- from ends -->
</div> <!-- box ends -->

<?php
    if(isset($_SESSION['customer_email'])){
        $customer_email = $_SESSION['customer_email'];
    }
    if(isset($_POST['update'])){

        $c_profile_pic = $_FILES['c_profile_pic']['name'];
        $temp_profile_pic_name = $_FILES['c_profile_pic']['tmp_name'];
        move_uploaded_file($temp_profile_pic_name,"customer_images/$c_profile_pic");

        $update_customer = "update customers
        set customer_image='$c_profile_pic'
        WHERE customer_email='$customer_email'";

        $run_update_customer = mysqli_query($con,$update_customer);

        if($run_update_customer){
            echo "<h2 align='center' style='color:green'>Updated Succesfully</h2>";
        }
    }
?>