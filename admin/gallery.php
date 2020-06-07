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
        <a class="btn btn-app" onclick="displayModal('#gallery-modal')">
                    <i class="fa fa-plus"></i> Add Photo to gallery
        </a>
        </div>    
    </div>
    <div class="row">
        <div id="gallery-append-point"></div>
        <?php
        $gallery = R::getAll('SELECT * FROM gallery');
        foreach ($gallery as $item) {
        ?>
        <div class="col-md-4">
        <div class="box box-solid box-default">
            <div class="box-header">
            <h3 class="box-title"><?=$item['caption']?></h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            <img class="img-responsive" src="dist/img/gallery/<?=$item['image']?>" alt="Photo">
            <a class="delete-from-gallery-button" id='<?=$item['id']?>'><i class="fa fa-trash"></i></a>
            </div><!-- /.box-body --> 
        </div><!-- /.box -->
        </div>
    <?php
    }
    ?>
  
    </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<div class="modal" id="gallery-modal" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background: #367fa9;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red; font-size: 32px;" ><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Add to Gallery</h4>
                  </div>
                  <div class="modal-body" style="padding: 0; text-align: center;">
                    <div id="upload-demo" class="js-gallery-submit"></div>
                <div class="row">
                <form action="" id="add-to-gallery-form">
                  <div class="form-group js-defailt-gallery-image" style="text-align: center;">                  
                    <label style="cursor: pointer;">
                        <span style="font-size: 11em;">
                            <i class="fa fa-image"></i>
                        </span>
                    <input type="file" id="gallery-picture" style="display: none; ">
                    </label>
                </div>
                <div class="form-group" class="js-gallery-submit">
                        <label for="caption" class="col-sm-2 control-label js-gallery-submit"></label>
                        <div class="col-sm-8 js-gallery-submit">
                          <input type="text" name="caption" class="form-control" id="caption" placeholder="Place your Caption" value="">
                        </div>
                </div>
                </form>
                </div>
                  </div>

                  <div class="modal-footer" style="padding: 7px 53px;">
                    <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                    <span style="border: 1px solid;
                                padding: 8px;border-radius: 33px;
                                cursor: pointer;" data-dismiss="modal" onclick="resetGalleryModal();" class="pull-left"><i class="fa fa-remove" style="color: red;"></i>Cancel</span>
                    <span style="border: 1px solid;
                                padding: 8px;border-radius: 33px;
                                cursor: pointer;
                                color: green;" class="pull-right js-gallery-submit" id="upload-gallery-button" ><i class="fa fa-check"></i>Upload</span>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>

<?php require_once 'footer.php'; ?>
            <script>

                $(function(){

                    resetGalleryModal();
                    
                });

                function resetGalleryModal(){
                    showOrHide(['.js-gallery-submit'], false);
                    showOrHide(['.js-defailt-gallery-image']);
                    $('#caption').val('');
                }


                function displayModal(modal){
                    $(modal).modal().show();
                }

                function prepareGalleryModal(){
                    showOrHide(['.js-gallery-submit']);
                    showOrHide(['.js-defailt-gallery-image'], false);
                }

                


                function showOrHide(arr, type='show'){
                    if(type == 'show'){
                        arr.forEach(element => {
                            $(element).show();
                        });
                    }else{
                        arr.forEach(element => {
                            $(element).hide();
                        });
                    }
                }

                function buildPhoto(id, caption, image){
                    let code =  "<div class='col-md-4'>";
                        code +='<div class="box box-solid box-default">';
                        code += '<div class="box-header">';
                        code += '<h3 class="box-title">'+caption+'</h3>';
                        code +='</div>';
                        code += '<div class="box-body">';
                        code += '<img class="img-responsive" src="'+ image+'" alt="Photo">';
                        code += '<a class="delete-from-gallery-button" id="'+ id +'"><i class="fa fa-trash"></i></a>';
                        code += '</div></div></div>';
                        return code;
                }

                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }

                var resize = $('#upload-demo').croppie({
                    enableExif: false,
                    enableOrientation: false,    
                    viewport: { // Default { width: 100, height: 100, type: 'square' } 
                        width: 360,
                        height: 245,
                        type: 'square' //circle
                    },
                    boundary: {
                        width: 380,
                        height: 265
                    }
                });

                $('.delete-from-gallery-button').click(function(){
                    let element = $(this);
                    let id = $(this).attr('id');
                    ajaxdeleteImage(element, id);
                });

                function ajaxdeleteImage(element, id){
                    let datatopost= [{name: 'deletefromgallery', value:1},
                                    {name: 'id', value:id}];
                                    // console.log(datatopost);
                    $.ajax({
                        url: "deletefromgallery.php",
                        type: "POST",
                        data: datatopost,
                        beforeSend:function(){
                            toastr.clear();
                            toastr.info('deleting photo from gallery');
                        },
                        success: function (data) {
                            if(data.trim() == 'success'){
                            toastr.clear();
                            toastr.success('deleted', "SUCCESSFUL!");
                            element.parent().parent().parent().remove();
                            }else{
                                swal('Unsuccessful!', data, 'error')  
                            }
                        },
                        error: function(){
                            toastr.clear();
                            swal('Unsuccessful!', 'Please check your network connection', 'error')

                        }
                        });
                }

                $('#gallery-picture').on('input', function () { 
                    var reader = new FileReader();
                    prepareGalleryModal();
                    reader.onload = function (e) {
                    resize.croppie('bind',{
                        url: e.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });
                    }
                    reader.readAsDataURL(this.files[0]);
                });




                $('#upload-gallery-button').on('click', function (ev) {
                    resize.croppie('result', {
                        type: 'canvas',
                        size: {
                            width: 360,
                            height: 245},
                        circle: false,
                    }).then(function (img) {
                        let datatopost = $('#add-to-gallery-form').serializeArray();
                        datatopost.push({name: 'galleryphoto', value: 1});
                        datatopost.push({name: 'image', value: img});
                        console.log(datatopost);

                        $.ajax({
                        url: "addgalleryphoto.php",
                        type: "POST",
                        data: datatopost,
                        beforeSend:function(){
                            toastr.clear();
                            toastr.info('adding photo to gallery');

                        },
                        success: function (data) {
                            if(!isNaN(data)){
                            resetGalleryModal();
                            toastr.clear();
                            toastr.success('photo added to gallery', "SUCCESSFUL!");
                            let caption = datatopost[0].value;
                            let id = data;
                            let photo = buildPhoto(id, caption, img);
                            $('#gallery-append-point').append(photo);
                            //Bind new element
                            $('.delete-from-gallery-button').click(function(){
                                let element = $(this);
                                let id = $(this).attr('id');
                                ajaxdeleteImage(element, id);
                            });
                            
                            }else{
                                swal('Unsuccessful!', data, 'error')  
                            }
                        },
                        error: function(){
                            toastr.clear();
                            swal('Unsuccessful!', 'Please check your network connection', 'error')

                        }
                        });
                    });
                    });


            </script>