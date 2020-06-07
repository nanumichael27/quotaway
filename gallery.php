<!doctype html>
<html class="no-js" lang="en">
<head>     
<title> Gallery :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>	
</head>
<body class="courses">
<?php require_once 'fils/headnav.php';  ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text">
						<h1> Gallery </h1>
						<p><span><a href="index.php"> Home <i class='fa fa-angle-right'></i></a></span> 
						<span class="b-active"> Gallery </span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container --> 
</div>
</header>
<!--  End header section-->

<div class="section-paddings gallery-images event-01">
	<div class="container">
		<div class="row gallery_img_wrapper">

		<?php
        $gallery = R::getAll('SELECT * FROM gallery');
        foreach ($gallery as $item) {
        ?>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>     
						<img src="admin/dist/img/gallery/<?=$item['image']?>" alt="">
						<figcaption>
							<a href="admin/dist/img/gallery/<?=$item['image']?>" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span><?=$item['caption']?></span></h4>
							<h3>Caption By: <span>Admin</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->
			<?php
		}
			?>

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-02.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-02.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>Daniel Baci</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-01.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-03.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>John Adam</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-04.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-04.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>Michel Jusi</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-05.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-05.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>Daniel Baci</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-06.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-06.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>John Adam</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-01.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-01.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>Michel Jusi</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-02.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-02.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>Daniel Baci</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="images/index-04/courses-01.jpg" alt="">
						<figcaption>
							<a href="images/index-04/courses-03.jpg" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>Education Class</span></h4>
							<h3>Caption By: <span>John Adam</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single-gallery -->
		</div>
	</div>
</div> 
<!-- incredible place end here -->


<!-- Footer Area section -->
<?php require_once 'fils/footer.php';  ?>

<!-- ./ End Footer Area-->
<?php require_once 'fils/scripts.php';  ?>

</body>
</html>