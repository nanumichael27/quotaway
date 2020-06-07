
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>   
	 <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
 	<!-- Revolution Slider -->
	<script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>   
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
   <!-- Slick Slider-->
	<script src="js/assets/slick.min.js"></script>
	<script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Revolution Extensions -->
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/revolution.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/toastr.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	<script>
		 $('#js-newsletter-form').submit(function(event){
          event.preventDefault();
          let datatopost = $(this).serializeArray();
          datatopost.push({name: 'newsletter', value: 1});
          console.log(datatopost);

          $.ajax({
                url: 'newsletter_proc.php',
                type: 'POST',
                data: datatopost,
                beforeSend:function(){
                  toastr.info('Processing');
                },
                success: function(data){
                    if(data.trim() == 'success'){
                        toastr.clear();
                        swal('Success', "You Have successfully subscribed for newsletters, You will receive frequent updates from now on", "success");
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
