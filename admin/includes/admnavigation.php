<?php

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">CMS CONTROL</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li>
            <a href="../index.php"><i class="fa fa-fw fa-user"></i> Frontend</a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
               <!-- <li>
                    <a href="../index.php"><i class="fa fa-fw fa-user"></i> Frontend</a>
                </li>-->
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Workplace</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown "><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="post_dropdown" class="collapse">
                    <li>
                        <a href="adminpost.php">View Posts</a>
                    </li>
                    <li>
                        <a href="adminpost.php">Add Posts</a>
                    </li>
                </ul>
          <!--  <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                </ul>
            </li>-->
            <li class="active">
                <a href="admincategory.php"><i class="fa fa-fw fa-file"></i>Category </a>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user_dropdown" class="collapse">
                    <li>
                        <a href="#">Show Users</a>
                    </li>
                    <li>
                        <a href="#">Add Users</a>
                    </li>
                </ul>
            <li class="active">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Comments </a>
            <li>
            <li class="active">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Profie </a>
            <li>
        </ul>


    </div>
    <!-- /.navbar-collapse -->
</nav>

