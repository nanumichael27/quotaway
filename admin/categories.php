<?php include_once('header.php'); ?>

<!-- Left side column. contains the logo and sidebar -->
<?php include_once('sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Category
      <small>Add, Edit or Delete Categories</small>
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
    <?php //message request
            include_once('blog/functions.php');
            include_once("blog/delete_popup.php");
            if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        $msg2 = $_GET['msg2'];  
        } else {
            $msg = '';
            $msg2 = '';
            }
            ?>
              <?php //message show
                msg_show($msg, $msg2);
                ?>
              <?php
              // create category query
                add_category();
                ?>
              <?php //delete query
                delete_category();
                ?>
                    <div class="col-lg-12">
                        <div class="col-xs-6">
                            <h1 class="page-header">
                                Add Category
                                <small></small>
                            </h1>
                            <form action="" method="post">
                                <div class="input-group input-group-lg">
                                    <input type="text" name="cat_title" value="" class="form-control" placeholder="Name a Category"> </div>
                                <div class="btn-group btn-group-lg">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Add Category"> </div>
                            </form>
                        </div>
                        <?php //update category
                           include "update_category.php"; ?>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="5%"> ID </th>
                                    <th width="65%"> Category Name </th>
                                    <th width="10%"> Total Post </th>
                                    <th width="10%"> Edit </th>
                                    <th width="10%"> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //adding query for category showing.
                                    category_table()
                            ?>
                            <script>
                                // delete model popup
                                    $(document).ready(function() {
                                        $(".delete_link").on('click', function() {
                                            var id = $(this).attr("rel");
                                            var delete_url = "categories.php?delete=" + id + " ";
                                            $(".modal_delete_link").attr("href", delete_url);
                                            $("#myModal").modal('show');
                                            });
                                    });
                            </script>
                            </tbody>
                        </table>
                    </div>
    </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once 'footer.php';