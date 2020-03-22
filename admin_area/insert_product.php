<?php include('includes/dbconnect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>

    <div class="row"> <!-- row begins -->
    
        <div class="col-lg-12"> <!-- col-lg-12 begins -->
        
            <ol class="breadcrumb"> <!-- breadcrumb begins -->
            
                <li class="active"> <!-- active begins -->
                
                    <i class="fa fa-dashboard"></i> Dashboard / Add Products
                
                </li> <!-- active ends -->
            
            </ol> <!-- breadcrumb ends -->
        
        </div> <!-- col-lg-12 ends -->

    </div> <!-- row ends -->

    <div class="row"> <!-- row begins -->
    
        <div class="col-lg-12"> <!-- col-lg-12 begins -->
        
            <div class="panel panel-default"> <!-- panel panel-default begins -->
            
                <div class="panel-heading"> <!-- panel-heading begins -->
                
                    <h3 class="panel-title"> <!-- panel-title begins -->
                        <i class="fa fa-money fa-fw"></i> Insert Product
                    </h3> <!-- panel-title ends -->
                
                </div> <!-- panel-heading ends -->

                <div class="panel-body"> <!-- panel-body begins -->
                
                    <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!-- form-horizontal begins -->
                    
                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Title</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_title" type="text" class="form-control" placeholder="Enter the product title here" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Category</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <select name="product_cat" class="form-control"> <!-- form-control begins -->
                                
                                    <option>Select A Product Category</option>

                                    <?php

                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);

                                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                            
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "
                                            
                                                <option value='$p_cat_id'> $p_cat_title </option>
                                            
                                            ";
                                            
                                        }

                                    ?>
                                
                                </select> <!-- form-control ends -->
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Category</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <select name="product_cat" class="form-control"> <!-- form-control begins -->
                                
                                    <option>Select A Category</option>

                                    <?php

                                        $get_cat = "select * from categories";
                                        $run_cat = mysqli_query($con,$get_cat);

                                        while($row_cat=mysqli_fetch_array($run_cat)){
                                            
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];

                                            echo "
                                            
                                                <option value='$cat_id'> $cat_title </option>
                                            
                                            ";
                                            
                                        }

                                    ?>
                                
                                </select> <!-- form-control ends -->
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Image 1</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_img1" type="file" class="form-control form-height-custom" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Image 2</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_img2" type="file" class="form-control form-height-custom" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Image 3</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_img3" type="file" class="form-control form-height-custom" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Price</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_price" type="number" class="form-control" placeholder="Enter the product price here" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Keywords</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_keywords" type="text" class="form-control" placeholder="Enter some product related keywords here" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Description</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <textarea name="product_desc" cols="19" rows="5" class="form-control"></textarea>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="submit" value="Add Product" type="submit" class="btn btn-primary form-control">
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                    </form> <!-- form-horizontal ends -->

                </div> <!-- panel-body ends -->
            
            </div> <!-- panel panel-default ends -->
        
        </div> <!-- col-lg-12 ends -->
    
    </div> <!-- row ends -->



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

<script src="js/tinymce/tinymce.min.js"></script>
<script> tinymce.init({ selector:'textarea' }); </script>

</body>
</html>