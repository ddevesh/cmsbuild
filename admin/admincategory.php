<?php

require_once "function.php";
category_calls();


?>
<body>

<div id="wrapper">

    <!-- Navigation -->


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>User</small>
                    </h1>
                    <div class="col-xs-6">
                       <form action="admincategory.php" method="post">
                           <label for="cat-title"> Add Category </label>
                     <div class="form-group">
                         <input class="products-search"   type="text" name="cat-title" placeholder="Enter Category here">
                     </div>
                               <div class="form-group">
                               <label name="cat_title"></label>
                             <input class="btn btn-success"  type="submit" name="submit" value="Add new category">
                           </div>
                           <form action="admincategory.php" method="post">
                               <label for="cat-title"> Update Category </label>
                           <div class="form-group">
                               <input class="products-search"   type="text" name="cat-update-title" placeholder="Select Category" value="<?php if (isset($cat_name)) {echo $cat_name ;}   ?> ">
                           </div>

                           <div class="form-group">
                               <label name="cat_update_title"></label>
                               <input class="btn btn-success"  type="submit" name="update" value="Update here">
                           </div>
                           </form>
                           <!--<div class="form-group">
                               <label name="cat_title"></label>
                               <input class="btn btn-default"  type="submit" name="delete " value="Delete">
                           </div>-->
                        </form>
                    </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead >
                                <tr>
                                    <th> ID </th>
                                    <th> Category </th>
                                </tr>
                                </thead>
                                    <tbody>
                                    <?
                                    $query = "SELECT * FROM categories";
                                    $show_cat = $connection->query($query);
                                    while ($row=$show_cat->fetch_assoc()) {
                                    $id = $row['cat_id'];
                                    $cat_name = $row['cat_name'];
                                    ?>
                                        <tr>
                                            <th><?php echo $id ?></th>
                                            <th><?php echo $cat_name ?></th>
                                            <th><?php echo "<a href='admincategory.php?delete={$id}'>Delete </a> "?></th>
                                            <th><?php echo "<a href='admincategory.php?edit={$id}'>Edit </a> "?></th>
                                        </tr>
                                    <? } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>



