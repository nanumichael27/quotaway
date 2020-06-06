<?php include_once('header.php'); ?>

<!-- Left side column. contains the logo and sidebar -->
<?php include_once('sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gallery
      <small>Add or Remove photos from your gallery</small>
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
        <div class="col-md 12">
        <a class="btn btn-app">
                    <i class="fa fa-plus"></i> Add Photo to gallery
        </a>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-4">
        <div class="box box-solid box-default">
            <div class="box-header">
            <h3 class="box-title">Caption</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            <img class="img-responsive" src="dist/img/photo1.png" alt="Photo">
            <a class="delete-from-gallery-button"><i class="fa fa-trash"></i></a>
            </div><!-- /.box-body --> 
        </div><!-- /.box -->
        </div>
        <div class="col-md-4">
        <div class="box box-solid box-default">
            <div class="box-header">
            <h3 class="box-title">Caption</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            <img class="img-responsive" src="dist/img/photo1.png" alt="Photo">
            <a class="delete-from-gallery-button"><i class="fa fa-trash"></i></a>
            </div><!-- /.box-body --> 
        </div><!-- /.box -->
        </div>
        <div class="col-md-4">
        <div class="box box-solid box-default">
            <div class="box-header">
            <h3 class="box-title">Caption</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            <img class="img-responsive" src="dist/img/photo1.png" alt="Photo">
            <a class="delete-from-gallery-button"><i class="fa fa-trash"></i></a>
            </div><!-- /.box-body --> 
        </div><!-- /.box -->
        </div>
  
    </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<div class="modal" id="profile-picture-modal" >
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header" style="background: #367fa9;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red; font-size: 32px;" ><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Profile Picture</h4>
                  </div>
                  <div class="modal-body" style="padding: 0">
                    <div id="upload-demo"></div>
                  </div>
                  <div class="modal-footer" style="padding: 7px 53px;">
                    <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                    <span style="border: 1px solid;
                                padding: 8px;border-radius: 33px;
                                cursor: pointer;" data-dismiss="modal" class="pull-left"><i class="fa fa-remove" style="color: red;"></i>Cancel</span>
                    <span style="border: 1px solid;
                                padding: 8px;border-radius: 33px;
                                cursor: pointer;
                                color: green;" class="pull-right" id="upload-profile-picture" ><i class="fa fa-check"></i>Upload</span>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>

<?php require_once 'footer.php'; ?>