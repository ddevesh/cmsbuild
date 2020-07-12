<?php
include "includes/db.php";
include "includes/header.php";
include "includes/navigation.php"


?>



    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php

                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];
                    $query = "SELECT * FROM posts where post_tags LIKE '%$search%' ";
                    $search_query = $connection->query($query);
                    if (!$search_query) {
                        echo "error in connect" . $connection->error;
                    }
                    $count = $search_query->num_rows;
                    if (!$count) {
                        echo "<h2>No Reults Found </h2>";
                    } else {
                       /* $query = "SELECT * FROM posts";
                        $select_posts_query = $connection->query($query);*/
                        while ($row =  $search_query->fetch_assoc()) {
                            $post_id = $row['post_id'];
                            $post_category_id = $row['post_category_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_picture'];
                            $post_content = $row['post_content']; ?>


                            <h1 class="page-header">
                                Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- First Blog Post -->
                            <h2>
                                <a href="#"><?php echo $post_title ?></a>
                            </h2>
                            <p class="lead">
                                by <a href="index.php"><?php echo $post_author ?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                            <hr>
                            <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                            <hr>
                            <p> <?php echo $post_content ?></p>
                            <a class="btn btn-primary" href="#">Read More
                                <span class="glyphicon glyphicon-chevron-right"></span></a>

                            <hr>
                        <?php }
                    }
                }

                ?>







                <!-- Second Blog Post -->
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->

<?php
include "includes/footer.php"; ?>

