<?php include("includes/header.php"); ?>

<?php

if(!$session->is_signed_in())
{
    redirect("login.php");
}

?>

<?php

$photos = Photo::find_all();

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Photos
                                <small></small>
                            </h1>

                            <p class="bg-danger text-center"><?php echo $message; ?></p>

                            <div class="col-md-12">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>ID</th>
                                            <th>Filename</th>
                                            <th>Title</th>
                                            <th>Size</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php foreach ($photos as $photo) : ?>

                                                   <tr>
                                                   <td><img class="img-responsive thumbnail" width="200" src="<?php echo $photo->picture_path(); ?>" alt="">
                                                        <div class="action_links">
                                                            <a class="btn btn-danger delete_link" href="delete_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger">Delete</a>
                                                            <a href="edit_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-warning">Edit</a>
                                                            <a href="../photo.php?id=<?php echo $photo->id; ?>" class="btn btn-success">View</a>
                                                        </div>
                                                   </td>
                                                   <td><?php echo $photo->id; ?></td>
                                                   <td><?php echo $photo->filename; ?></td>
                                                   <td><?php echo $photo->title; ?></td>
                                                   <td><?php echo $photo->size; ?></td>
                                                   <td>
                                                        <a class="btn btn-success" href="comment_photo.php?id=<?php echo $photo->id; ?>">
                                                        <?php 
                                                            $comments = Comment::find_the_comments($photo->id);
                                                            echo count($comments);
                                                        ?>
                                                        </a>
                                                   </td>
                                                   </tr>

                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>