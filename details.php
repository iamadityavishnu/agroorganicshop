<?php 

$active = "Shop";
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
                        Shop
                    </li>
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php if(isset($pro_title)){echo $p_cat_title;} ?></a>
                    </li>
                    <li>
                        <?php if(isset($pro_title)){echo $pro_title;} ?>
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->
                <div id="productMain" class="row"> <!-- productMain row begins -->
                    <div class="col-sm-6"> <!-- col-sm-6 begins -->
                        <div id="mainImage"> <!-- mainImage begins -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- myCarousel carousel slide begins -->

                                <ol class="carousel-indicators"> <!-- carousel-indicators begins -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol> <!-- carousel-indicators ends -->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product Image Front"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product Image Side"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product Image Back"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control begins -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a> <!-- left carousel-control ends -->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control begins -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a> <!-- right carousel-control ends -->

                            </div> <!-- myCarousel carousel slide ends -->
                        </div> <!-- mainImage ends -->
                    </div> <!-- col-sm-6 ends -->

                    <div class="col-sm-6"> <!-- col-sm-6 begins -->
                        <div class="box"> <!-- box begins -->
                            <h1 class="text-center"><?php if(isset($pro_title)){echo $pro_title;} ?></h1>

                            <?php add_cart(); ?>

                            <?php
                                if(isset($stock_status)){
                                    if($stock_status==1){
                                        echo "<form action='details.php?add_cart=";
                                        echo $product_id;
                                        echo "' class='form-horizontal' method='post'>";
                                    }else{
                                        echo "<form action='' class='form-horizontal' method='post'>";
                                    }
                                }
                            ?>

                            <!-- form-horizontal begins -->
                                <div class="form-group"> <!-- form begins -->
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>

                                    <div class="col-md-7"> <!-- col-md-7 begins -->
                                        <input type="number" name="product_qty" class="form-control" value="1">
                                    </div> <!-- col-md-7 ends -->
                                    
                                </div> <!-- form-group ends -->

                                <div class="form-group"> <!-- form-group begins -->

                                    <label class="col-md-5 control-label">Product Weigth</label>

                                    <div class="col-md-7"> <!-- col-md-7 begins -->
                                        <select name="product_wt" id="" class="form-control" onchange="showPrice(this.value, <?php echo $_GET['pro_id']; ?>)"> <!-- form-control begins -- product_size--> 
                                            <option value="<?php echo $pro_wt1; ?>"><?php if($pro_wt1<1000){echo $pro_wt1; echo " Grams";}else{ echo $pro_wt1/1000; echo " Kg";} ?></option>
                                            <?php if($pro_wt2!=0){
                                                if($pro_wt2<1000){
                                                    echo "
                                                    <option value='$pro_wt2'>$pro_wt2 Grams</option>
                                                    ";
                                                }
                                                else{
                                                    $weight_in_kg = $pro_wt2/1000;
                                                    echo "
                                                        <option value='$pro_wt2'>$weight_in_kg Kg</option>
                                                    ";
                                                }
                                            }
                                            if($pro_wt3!=0){
                                                if($pro_wt3<1000){
                                                    echo "
                                                    <option value='$pro_wt3'>$pro_wt3 Grams</option>
                                                    ";
                                                }
                                                else{
                                                    $weight_in_kg = $pro_wt3/1000;
                                                    echo "
                                                        <option value='$pro_wt3'>$weight_in_kg Kg</option>
                                                    ";
                                                }
                                            }
                                            ?>
                                        </select> <!-- form-control ends -->
                                    </div> <!-- col-md-7 ends -->

                                </div> <!-- form-group ends -->

                                <p class="price" id="price">
                                    Rs. <?php if(isset($pro_price)){echo $pro_price;} ?>
                                </p>

                                <input name="price" id="price-to-pass" type="hidden" value="<?php if(isset($pro_price)){echo $pro_price;} ?>">

                                <p class="text-center buttons">
                                    <?php
                                        if(isset($stock_status)){
                                            if($stock_status==1){
                                                echo "<button class='btn btn-primary i fa fa-shopping-cart'> Add to cart</button>";
                                            }else{
                                                echo "<button class='btn btn-warning disabled i fa fa-shopping-cart'> Out of stock</button>";
                                            }
                                        }
                                    ?>
                                    
                                </p>

                            </form> <!-- form-horizontal ends -->

                        </div> <!-- box ends -->

                        <div class="row" id="thumbs"> <!-- row ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="0" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product Front" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="1" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product Side" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                            <div class="col-xs-4"> <!-- col-xs-4 begins -->
                                <a href="#" class="thumb"> <!-- thumb begins -->
                                    <img data-target="#myCarousel" data-slide-to="2" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product Back" class="img-responsive">
                                </a> <!-- thumb ends -->
                            </div> <!-- col-xs-4 ends -->

                        </div> <!-- row ends -->

                    </div> <!-- col-sm-6 ends -->

                </div> <!-- productMain row ends -->

                <div class="box" id="details"> <!-- box begins -->

                    <h4>Product Details</h4>
                    <p> <?php echo $pro_desc; ?> </p>

                    <h4>Weights Available</h4>

                    <?php
                        if($pro_wt1!=0){
                            if($pro_wt1<1000){
                                echo "
                                <p>$pro_wt1 Grams</p>
                                ";
                            }
                            else{
                                printf("<p>%.1f Kilogram</p>",$pro_wt1/1000);
                            }
                        }
                        if($pro_wt2!=0){
                            if($pro_wt2<1000){
                                echo "
                                <p>$pro_wt2 Grams</p>
                                ";
                            }
                            else{
                                printf("<p>%.1f Kilogram</p>",$pro_wt2/1000);
                            }
                        }
                        if($pro_wt3!=0){
                            if($pro_wt3<1000){
                                echo "
                                <p>$pro_wt3 Grams</p>
                                ";
                            }
                            else{
                                printf("<p>%.1f Kilogram</p>",$pro_wt3/1000);
                            }
                        }
                    ?>

                    <!-- <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul> -->

                    <hr>

                </div> <!-- box ends -->

                <div id="row same-height-row"> <!-- row same-height-row begins -->
                    <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 begins -->
                        <div class="box same-height headline"> <!-- box same-height headline begins -->
                            <h3 class="text-center">Products you may like</h3>
                        </div> <!-- box same-height headline ends -->
                    </div> <!-- col-md-3 col-sm-6 ends -->

                    <?php
                        $get_products = "select * from products order by rand() LIMIT 0,3";
                        $run_products = mysqli_query($db,$get_products);
                        while($row_products=mysqli_fetch_array($run_products)){
                            $pro_id = $row_products['product_id'];
                            $pro_title = $row_products['product_title'];
                            $pro_price = $row_products['product_price'];
                            $pro_img1 = $row_products['product_img1'];

                            echo "
                            <div class='col-md-3 col-sm-6 center-responsive'>
                                <div class='product same-height'>
                                    <a href='details.php?pro_id=$pro_id'>
                                        <img src='admin_area/product_images/$pro_img1' alt='$pro_title' class='img-responsive'>
                                    </a>
                                    <div class='text'>
                                        <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                        <p class='price'>Rs. $pro_price</p>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    ?>

                </div> <!-- row same-height-row ends -->

            </div> <!-- col-md-9 ends -->

        </div> <!-- container ends -->
    </div> <!-- content ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

<script>

function showPrice(wt, p_id) {
  var xhttp;
  if (wt == "") {
    document.getElementById("price").innerHTML = ""; // TO EDIT
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("price").innerHTML = "Rs. " + this.responseText;
    document.getElementById("price-to-pass").setAttribute("value", this.responseText);
    }
  };
  xhttp.open("GET", "getprice.php?w="+wt+"&p="+p_id, true);
  xhttp.send();
}

</script>

</body>
</html>