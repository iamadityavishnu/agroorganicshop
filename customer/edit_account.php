<h1 align="center">Edit your account</h1>

<form action="" method="post" enctype="multipart/form-data"> <!-- from begins -->

    <div class="form-group"> <!-- form-group begins -->

        <label>Name</label>
        <input type="text" name="c_name" class="form-control" required>

    </div> <!-- form-group ends -->

    <div class="form-group"> <!-- form-group begins -->

        <label>Email</label>
        <input type="email" name="c_email" class="form-control" required>

    </div> <!-- form-group ends -->

    <div class="form-group"> <!-- form-group begins -->

        <label>Phone</label>
        <input type="number" name="c_phone" class="form-control" required>

    </div> <!-- form-group ends -->

    <div class="form-group"> <!-- form-group begins -->

        <label>Address</label>
        <input type="text" name="c_address" class="form-control" required>

    </div> <!-- form-group ends -->

    <div class="form-group"> <!-- form-group begins -->

        <label>Profile Picture</label>
        <input type="file" name="c_image" class="form-control form-height-custom" required>
        <img class="img-responsive" src="customer_images/IMG_8426.png" width="50px" alt="Profile picture">

    </div> <!-- form-group ends -->

    <div class="text-center"> <!-- text-center begins -->

        <button name="update" class="btn btn-primary"> <!-- btn btn-primary begins -->

            <i class="fa fa-user-md"></i> Update profile

        </button> <!-- btn btn-primary ends -->

    </div> <!-- text-center ends -->

</form> <!-- from ends -->