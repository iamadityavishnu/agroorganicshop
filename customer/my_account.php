<?php 

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
            
                <div class="box"> <!-- box begins -->
                
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