<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu begins -->
    <div class="panel-heading"> <!-- panel-heading begins -->
        <h3 class="panel-title">Categories</h3>
    </div> <!-- panel-heading begins -->

    <div class="panel-body"> <!-- panel-body begins -->
        <ul class="nav nav-pills nav-stacked category-menu"> <!-- nav nav-pills nav-stacked category-menu begins -->
            
            <?php

                getPCats();

            ?>

        </ul> <!-- nav nav-pills nav-stacked category-menu ends -->
    </div> <!-- panel-body ends -->

</div> <!-- panel panel-default sidebar-menu ends -->

<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu begins -->
    <div class="panel-heading"> <!-- panel-heading begins -->
        <h3 class="panel-title">Top Rated</h3>
    </div> <!-- panel-heading begins -->

    <div class="panel-body"> <!-- panel-body begins -->
        <ul class="nav nav-pills nav-stacked category-menu"> <!-- nav nav-pills nav-stacked category-menu begins -->
            
            <?php

                getCats();

            ?>
            
        </ul> <!-- nav nav-pills nav-stacked category-menu ends -->
    </div> <!-- panel-body ends -->

</div> <!-- panel panel-default sidebar-menu ends -->