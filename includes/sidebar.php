<?php


?>
<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form method="post" action="search.php">
        <div class="input-group">
            <input type="text" class="form-control" name="search">
            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        </form>
        <!-- /.input-group -->
    </div>


    <div class="well">
        <?php


        $query = "SELECT * FROM categories";
        $select_cat_query = $connection->query($query);
        ?>
        <h4>Blog Categories</h4>


        <div class="row">

            <div class="col-lg-6">

                <ul class="list-unstyled">
                   <?php while ($row =$select_cat_query->fetch_assoc()) {

                    $cat_name = $row['cat_name'];
                    echo " <li><a href=\"#\">{$cat_name}</a>"; ?>

                    <!--<li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>-->
                   <?php } ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <!--<div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#"> /*echo $cat_name*/?></a>
                    </li>-->
                   <!-- <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>-->
              <!--  </ul>
            </div>-->
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>


    <!-- Side Widget Well -->
 <?php include "widget.php" ?>

</div>

</div>
<!-- /.row -->

<hr>