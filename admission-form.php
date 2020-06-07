<!doctype html>
<html class="no-js" lang="en">
<head>
<title>  Admission Form  :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>	
</head>
<body class="register">
<?php require_once 'fils/headnav.php';  ?>			
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1> Admission Form  </h1>
						<p><span><a href="index.php"> Home <i class='fa fa-angle-right'>
                        </i></a></span> 
                        <span class="b-active"> Admission </span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
</div>
</header>     
<!--  End header section-->
<section class="register-area">
	<div class="container">
        
    <div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="" class="learnpro-register-form" id="js-admission-form">
					<p class="lead"> Process your Admission Form Online </p>
					<div class="form-group">             
					 	<input autocomplete="on" required name="firstname" class="required form-control" placeholder="First Name" type="text">
					</div>   
					<div class="form-group">
					 	<input autocomplete="on" required name="lastname" class="required form-control" placeholder="Last Name" type="text">
					</div>						
					<div class="form-group"> 
					  	<input autocomplete="on" required name="nationality" class="required form-control" placeholder="Nationality" type="text">
					</div>
					<div class="form-group">
					  <input autocomplete="on" required name="phone" class="required form-control" placeholder="Phone Number"  type="text">
					</div>		
					<div class="form-group">
					 	<input autocomplete="on" required name="email" class="required form-control" placeholder="Email address" type="email">
					</div>	
					<textarea class="form-control" name="bio" placeholder="About / Bio" name="bio" rows="3" style="resize: none;"></textarea>

					<div class="form-group register-btn">
					 	<button type="submit" class="btn btn-primary btn-lg"> Submit Form </button> 
					</div>			
				</form>
			</div>												
		</div>
	</div>
</section>

<!-- Footer Area section -->
<?php require_once 'fils/footer.php';  ?>

<!-- ./ End Footer Area-->
<?php require_once 'fils/scripts.php';  ?>
<script>
	        $('#js-admission-form').submit(function(event){
          event.preventDefault();
          let datatopost = $(this).serializeArray();
          datatopost.push({name: 'admission', value: 1});
          console.log(datatopost);

          $.ajax({
                url: 'admission_proc.php',
                type: 'POST',
                data: datatopost,
                beforeSend:function(){
                  toastr.info('Processing');
                },
                success: function(data){
                    if(data.trim() == 'success'){
                        toastr.clear();
                        swal('Success', "Your application has been submitted successully", "success");
                    }else{
                        toastr.clear();
                        swal('Unsuccessful!' ,data, 'warning');
                    }
                },
                error: function(){
                    swal('Network error','Please check your network connection', 'error');
                }
            });
        });
</script>

</body>
</html>