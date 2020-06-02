<!doctype html>
<html class="no-js" lang="en">
<head>
<title>  Contact us :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>	
</head>
<body class="contact">
<?php require_once 'fils/headnav.php';  ?>
<?php require_once 'fils/db_connect.inc.php'; ?>

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
<?php       				
    if(isset($_POST['create'])){
	unset($_POST['create']);
	$email =mysqli_real_escape_string($dtech,trim($_POST['email']));
	$fname = mysqli_real_escape_string($dtech,trim($_POST['fname']));
	$tel = mysqli_real_escape_string($dtech,trim($_POST['tel']));
	$count = mysqli_real_escape_string($dtech,trim($_POST['count']));
	$datein = date('D-M-Y/ h-i-s');  
    $query_email = mysqli_query($dtech,"select * from contacts where email ='$email' ") or
     die(mysqli_error($dtech));
	if(mysqli_num_rows($query_email) > 0){
		echo '<div class="alert alert-danger"><center>
		<span class="glyphicon glyphicon-remove"></span><hr/>
		 You have already applied.</center>
		</div>';
	}
else {
$insert = mysqli_query($dtech,"insert into contacts (fname,tel,email,count,datein)
 value('$fname','$tel','$email','$count','$datein')") or
  die(mysqli_error($dtech)); 

if($insert){

$to      = 'info@quotawayservices.com'; // Send email to our user
$subject = 'New Contact E-Mail'; // Give the email a subject 
$message = 'Name: '.$fname. "\r\n"
           .'Email :'.$email."\r\n"
		   .'Phone Number :'.$tel."\r\n"
		   .'Message :'.$count."\r\n";
                     
$headers = 'From:admin@quotawayservices.com' . "\n"; // Set from headers

mail($to, $subject, $message, $headers);
    echo'<div class="alert alert-success">
    <center><h3>
           Your Message have been Received, We will be in touch with you very soon. 
    </h3></center>
		 <hr/>
        </div>';
}

else {
	echo '<div class="alert alert-danger"><center>
		<br/>
		OOps, something went wrong,please try again.</center>
		</div>';
}

}       				
  
}?> 
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
                          action="<?php  echo $_SERVER['PHP_SELF'];  ?>">
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

</body>
</html>