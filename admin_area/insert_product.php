<?php include('includes/dbconnect.php'); ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body> -->

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
                            
                                <select name="cat" class="form-control"> <!-- form-control begins -->
                                
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
                        
                            <label class="col-md-3 control-label">Product Weight 1</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_wt1" type="number" class="form-control" placeholder="Enter weight in grams" required>
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Weight 2</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_wt2" type="number" class="form-control" placeholder="Enter weight in grams">
                            
                            </div> <!-- col-md-6 ends -->
                        
                        </div> <!-- form-group ends -->

                        <div class="form-group"> <!-- form-group begins -->
                        
                            <label class="col-md-3 control-label">Product Weight 3</label>

                            <div class="col-md-6"> <!-- col-md-6 begins -->
                            
                                <input name="product_wt3" type="number" class="form-control" placeholder="Enter weight in grams">
                            
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

<!-- </body>
</html> -->


<?php

if(isset($_POST['submit'])){

    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_wt1 = $_POST['product_wt1'];
    $product_wt2 = $_POST['product_wt2'];
    $product_wt3 = $_POST['product_wt3'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_product = "insert into products (p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_wt1, product_wt2, product_wt3, product_price, product_keywords, product_desc, in_stock) values
    ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_wt1','$product_wt2','$product_wt3','$product_price','$product_keywords','$product_desc','1')";

    $run_product = mysqli_query($con,$insert_product);

    if($run_product){
        echo "<script>alert('Product has been added succesfully')</script>";
        echo "<script>window.open('index.php?insert_products','_self')</script>";
    }
}

?>