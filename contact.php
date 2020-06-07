<!doctype html>
<html class="no-js" lang="en">
<head>
<title>  Contact us :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>	
</head>
<body class="contact">
<?php require_once 'fils/headnav.php';  ?>

<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Contact Us</h1>
						<p><span><a href="index.php"> Home <i class='fa fa-angle-right'></i></a></span> 
						<span class="b-active"> Contact </span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
</div>
</header>
<!--  End header section-->

<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Contact Info</h2>		
					<p class="content-sub_p">Welcome to our Website. 
                          We are glad to have you around.</p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4> <br>
                                <p> +234 (0) 9017 355 410,
                                 +234 (0) 8135 363 878, 
                                +234 (0) 8105 194 091 
                                </p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4> <br>
                                <p> help@quotawayservices.com </p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4> <br>
                                <span> Efex 02 building, 96 Uselu-Lagos road, Benin City, Edo State. 
                                <b> and </b>
                                 No. 7  Naomi Shopping Mall Airport Road, Warri Delta State. </p>
                            </div>
	                    </div> 
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>	 
	                	</div>     
                    </div>
                </div>                          	                        
			</div>	

			<div class="col-sm-6  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Send A Message</h2>		
						<p class="content-sub_p">
                        Send us a message, for enquiry, partnerships, supports, etc. 
                        We will be in touch with you. 
                        </p>
					</div>
				</div>
				<div class="input-contact-form">
					<div id="contact">
					<div id="message"></div>	                       
                    <form method="post" enctype="multipart/form-data" 
                          action="<?php  echo $_SERVER['PHP_SELF'];  ?>" id="js-contact-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="fname" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="tel" id="subject">
                                </div>
                            </div>	
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Message" name="count" id="comments"></textarea>
                                </div>
                            </div>	
                            <div class="col-sm-12">                                    
                                <div class="full-width">
                                    <input value="Submit" type="submit" name="create" id="submit">
                                </div>
                            </div>	
                        </div>
                    </form>
                    </div>
                    
                    
				</div>
			</div>																
		</div>
	</div>
</section>
<!-- ./ End Contact Area section -->


<!-- Footer Area section -->
<?php require_once 'fils/footer.php';  ?>

<!-- ./ End Footer Area-->
<?php require_once 'fils/scripts.php';  ?>
<script>
    		 $('#js-contact-form').submit(function(event){
          event.preventDefault();
          let datatopost = $(this).serializeArray();
          datatopost.push({name: 'contact', value: 1});
          console.log(datatopost);

          $.ajax({
                url: 'contact_proc.php',
                type: 'POST',
                data: datatopost,
                beforeSend:function(){
                  toastr.info('Processing');
                },
                success: function(data){
                    if(data.trim() == 'success'){
                        toastr.clear();
                        swal('Success', "Your Message have been Received, We will be in touch with you very soon.", "success");
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