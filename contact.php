<?php 

$active = "Contact Us";
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
                        Contact Us
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
                            <h2>Feel free to contact us</h2>
                            <p class="text-muted"> <!-- text-muted begins -->
                                Feel free to contact us 24/7 in case of any queries.
                            </p> <!-- text-muted ends -->
                        </center> <!-- center ends -->

                        <form action="contact.php" method="post"> <!-- form begins -->
                        
                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            
                            </div> <!-- form-group ends -->

                            <div class="text-center"> <!-- text-center begins -->
                            
                                <button type="submit" name="submit" class="btn btn-primary"> <!-- btn btn-primary begins -->
                                
                                    <i class="fa fa-user-md"></i> Send Message
                                
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