<?php include_once('header.php'); ?>

<!-- Left side column. contains the logo and sidebar -->
<?php include_once('sidebar.php') ?>
<?php include_once('blog/functions.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Posts
      <small>Edit, delete and moderate posts</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Your Page Content Here -->
    <div class="row">
    <div class="col-lg-12">
                    <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else {$source = '';}
                            switch($source){
                                    case 'add_post';
                                    include "blog/add_post.php";
                                    break;

                                    case 'edit_post';
                                    include "blog/edit_post.php";
                                    break;

                                default:
                                    include "blog/view_all_posts.php";
                                    break;
                            }
                            ?>
                </div>
    </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once 'footer.php';