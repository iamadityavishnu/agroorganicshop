<?php 

$active = "Home";
include("includes/header.php");

?>

    <div class="container" id="slider"> <!-- container SLIDER begins -->

        <div class="col-md-12"> <!-- col-md-12 begins -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide begins -->

                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner"> <!-- carousel-inner begins -->
                    
                    <?php

                    $get_slides = "select * from slider LIMIT 0,1";

                    $run_slides = mysqli_query($con,$get_slides);

                    while($row_slides=mysqli_fetch_array($run_slides)){

                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];

                        echo "
                        
                          <div class='item active'>
                          <img src='admin_area/slides_images/$slide_image'>
                          </div>
                        
                        ";

                    }

                    $get_slides = "select * from slider LIMIT 1,3";

                    $run_slides = mysqli_query($con,$get_slides);

                    while($row_slides=mysqli_fetch_array($run_slides)){

                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];

                        echo "
                        
                          <div class='item'>
                          <img src='admin_area/slides_images/$slide_image'>
                          </div>
                        
                        ";

                    }

                    ?>

                </div> <!-- carousel-inner ends -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- Slider Arrow -->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a> <!-- Slider Arrow Ends -->

            </div> <!-- carousel slide ends -->

        </div> <!-- col-md-12 ends -->

    </div> <!-- container SLIDER ends -->

    <div id="advantages"> <!-- advantages begins -->
        <div class="container"> <!-- container begins -->
            <div class="same-height-row"> <!-- same-height-row begins -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>

                        <h3><a href="#">We love our customer</a></h3>
                        <p>We love our customer</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>

                        <h3><a href="#">Best ever prices offered</a></h3>
                        <p>We offer the best price</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 begins -->
                    <div class="box same-height"> <!-- box same-height begins -->

                        <div class="icon">
                            <i class="fa fa-certificate"></i>
                        </div>

                        <h3><a href="#">100% organic products</a></h3>
                        <p>We sell only organic products</p>

                    </div> <!-- box same-height ends -->
                </div> <!-- col-sm-4 ends -->

            </div> <!-- same-height-row ends -->
        </div> <!-- container ends -->
    </div> <!-- advantages ends -->

    <div id="hot"> <!-- hot top-products begins -->
        <div class="box"> <!-- box begins -->
            <div class="container"> <!-- container begins -->
                <div class="col-md-12"> <!-- col-md-12 begins -->
                    <h2>
                        Top Products
                    </h2>
                </div> <!-- col-md-12 ends -->
            </div> <!-- container ends -->
        </div> <!-- box ends -->
    </div> <!-- hot top-products ends -->

    <div id="content" class="container"> <!-- container begins -->
        <div class="row"> <!-- row begins -->
            
            <?php
                getPro();
            ?>

        </div> <!-- row ends -->
    </div> <!-- container ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>