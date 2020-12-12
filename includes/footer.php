<div id="footer"> <!-- footer begins -->
    <div class="container"> <!-- container begins -->
        <div class="row"> <!-- row begins -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 begins -->

                <h4>Pages</h4>

                <ul> <!-- ul begins -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul> <!-- ul ends -->

                <hr>

                <h4>User Selection</h4>

                <ul> <!-- ul begins -->
                    <li>
                        <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'>Login</a>";
                            }else{
                                echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                            }
                        ?>
                    </li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul> <!-- ul ends -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div> <!-- col-sm-6 col-md-3 ends -->

            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 begins -->
            
                <h4>Top Categories</h4>

                <ul> <!-- ul begins -->
                    
                    <?php
                    
                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                            
                                <li>

                                    <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>

                                </li>
                            
                            ";

                        }

                    ?>

                </ul> <!-- ul ends -->

                <hr class="hidden-md hidden-lg">
            
            </div> <!-- col-sm-6 col-md-3 ends -->

            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 begins -->
            
                <h4>Contact us</h4>

                <p> <!-- p begins -->
                
                    <strong>Organic Basket Inc.</strong>
                    <br>Kaloor
                    <br>Ernakulam
                    <br>Kerala, India
                    <br>682017
                    <br><a href="tel:+919947189437">+91 99471 89437</a>
                    <br><a href="mailto:adityavishnu3610@gmail.com">adityavishnu3610@gmail.com</a>
                
                </p> <!-- p ends -->

                <a href="contact.php">Check our contact page</a>

                <hr class="hidden-md hidden-lg">
            
            </div> <!-- col-sm-6 col-md-3 ends -->

            <div class="col-sm-6 col-md-3">
            
                <h4>Get the news</h4>

                <p class="text-muted">
                
                    Never miss an update from us. Keep in touch by subscribing to our mailing list.
                
                </p>

                <!-- Begin Mailchimp Signup Form -->
                
                    <form action="https://agroorganicshop.us19.list-manage.com/subscribe/post?u=60326835e5529eefcf0434e04&amp;id=b83a8362cf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="input-group">
                            <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_60326835e5529eefcf0434e04_b83a8362cf" tabindex="-1" value="">
                                </div>
                            <span class="input-group-btn">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default">
                            </span>
                        </div>
                    </form>

                <!-- Ending Mailchimp Signup Form -->

                <hr>

                <h4>Keep in touch</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </p>
            
            </div>

        </div> <!-- row ends -->
    </div> <!-- container ends -->
</div> <!-- footer ends -->

<div id="copyright"> <!-- copyright begins -->
    <div class="container"> <!-- container begins -->

        <div class="col-md-6"> <!-- col-md-6 begins -->
            <p class="pull-left">

                &copy; <?php $date_array = getdate(); echo $date_array['year']; ?> OrganicBasket. All rights reserved

            </p>
        </div> <!-- col-md-6 ends -->

    </div> <!-- container ends -->
</div> <!-- copyright ends -->