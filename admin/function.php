<?php
include "includes/adminheader.php";
include "includes/admnavigation.php";
include "../includes/db.php";

function category_calls() {
    global $connection;
    if(!$connection) {
        $connection->error;
    }
    $submit= isset($_POST['submit']);

    if (isset($submit)) {
        global $connection;


        if (isset($_POST['cat-title'])) {
            $catname =$_POST['cat-title'];
            $query_submit = "INSERT INTO categories (cat_name) VALUES ('$catname')";

            $cat_query = $connection->query($query_submit);
            if ($cat_query == true) {
                echo "cat entered successfully" ;
            }
            else {
                echo "error in entering category".$query_submit.$connection->error ;
            }
        }

    }



    if(isset($_GET['delete'])){
        $del_id =  $_GET['delete']     ;
        $delete_query = "DELETE  FROM categories WHERE cat_id='$del_id'";
        $delete_con = $connection->query($delete_query);
        header("Location: admincategory.php");



    }


    if (isset($_GET['edit'])) {
        $edit_cat = $_GET['edit'];
        $query = "SELECT * FROM categories WHERE cat_id ='$edit_cat'";
        $show_cat_edit = $connection->query($query);
        while ($row = $show_cat_edit->fetch_assoc()) {
            $id = $row['cat_id'];
            global $cat_name;
            $cat_name = $row['cat_name'];
        }
    }


    /*    if (isset($_POST['update'])) {
            $cat_update_name = $_POST['cat-update-title'];

            $update_query = "UPDATE categories SET cat_name = {$cat_update_name} where cat_id ={$id} ";
            $upquery = $connection->query($update_query);
            if (!$upquery)  {
                die ("fucked").$connection->error;

            }

        }*/


///update needs to be done

}



?>