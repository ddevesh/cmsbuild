<?php


require "function.php";



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

                    <?php
                    if(isset($_GET['source'])) {
                        $source = $_GET['source'];
                        }
                    else {
                        $source='';
                    }
                        switch ($source) {
                            case 1:
                                echo "fuck";
                                break;
                            case 2:
                                echo "suck";
                                break;
                            default:
                                include "includes/all_posts.php";

                    }

                    ?>

                           <!--<div class="form-group">
                               <label name="cat_title"></label>
                               <input class="btn btn-default"  type="submit" name="delete " value="Delete">
                           </div>-->
                        </form>
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




?>
