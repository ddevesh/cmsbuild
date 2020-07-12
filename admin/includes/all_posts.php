 <table class="table table-bordered table-hover table-responsive table-striped ">
                       <thead class="thead-dark">
                       <tr >
                           <td> Id</td>
                           <td> Author</td>
                           <td> Title
                           <td> Content</td>
                           <td> Category</td>
                           <td> Status</td>
                           <td> Image</td>
                           <td> Comments</td>
                           <td> Tags</td>
                           <td> Date</td>

                       </tr>
                       </thead>
                        <tbody>
<?php
                        $post_query = "SELECT * FROM posts";
                        $post_query_show = $connection->query($post_query);

                        while($post_row = $post_query_show->fetch_assoc()) {
                            $post_id =$post_row['post_id'];
                            $post_author = $post_row['post_author'];
                            $post_title = $post_row['post_title'];
                            $post_content = $post_row['post_content'];
                            $post_category = $post_row['post_category_id'];
                            $post_status = $post_row['post_status'];
                            $post_image = $post_row['post_picture'];
                            $post_comments = $post_row['post_comments'];
                            $post_tags = $post_row['post_tags'];
                            $post_date = $post_row['post_date']
                            ?>
                        <tr>
                            <td><?php echo $post_id;?></td>
                            <td><?php echo $post_author;?></td>
                            <td><?php echo $post_title;?></td>
                            <td><?php echo $post_content;?></td>
                            <td><?php echo $post_category;?></td>
                            <td><?php echo $post_status;?></td>
                            <td><?php echo "<img src = '../images/$post_image' />" ?></td>
                            <td><?php echo $post_comments;?></td>
                            <td><?php echo $post_tags;?></td>
                            <td><?php echo $post_date;?></td>
                        </tr>
                        <?php } ?>
                        </tbody>

                   </table>


