<?php 

$active = "My Account";
include("includes/header.php");

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

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->

                <div class="box" style="background: #f7f7f7"> <!-- box begins --> <!-- i made a change here to be reviewed -->
                
                    <div class="box-header"> <!-- box-header begins -->

                        <center> <!-- center begins -->
                            <h2>Create a new account</h2>
                        </center> <!-- center ends -->

                        <form action="customer_register.php" method="post" enctype="multipart/form-data"> <!-- form begins -->
                        
                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Password</label>
                                <input type="password" class="form-control" name="c_pass" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="text-center"> <!-- text-center begins -->
                            
                                <button type="submit" name="register" class="btn btn-primary"> <!-- btn btn-primary begins -->
                                
                                    <i class="fa fa-user-plus"></i> Register
                                
                                </button> <!-- btn btn-primary ends -->

                            </div> <!-- text-center ends -->
                        
                        </form> <!-- form ends -->

                    </div> <!-- box-header ends -->

                </div> <!-- box ends -->

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