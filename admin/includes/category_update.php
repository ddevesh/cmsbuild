<?php
if (isset($_POST['update'])) {
    $cat_update_name = $_POST['cat-update-title'];

    $update_query = "UPDATE categories SET cat_name = {$cat_update_name} where cat_id ={$edit_cat} ";
    $upquery = $connection->query($update_query);
    if (!$upquery)  {
        die ("fucked").$connection->error;

    }

}

?>

