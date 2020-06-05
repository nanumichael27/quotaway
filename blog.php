<?php
require 'connection.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>    
<title> News Updates :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>		
</head>
<body class="blog_1">
<?php require_once 'fils/headnav.php';  ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1> News Updates </h1>
						<p><span><a href="index.php"> Home <i class='fa fa-angle-right'></i></a></span>
						<span class="b-active"> News </span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container --> 

	</div>
</header>
	<!--  End header section-->

	<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 bolg_side-left">
<?php
            $per_page = 3;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                } else {
                    $page = "";
                }
            if($page == "" || $page == 1){
                $page_1 = 0;
            } else {
                $page_1 = ($page * $per_page) - $per_page;
            }
            ?>
                <?php
            if(isset($_SESSION['admin_id'])){
                $post_query_count = "SELECT * FROM posts";
            } else {
                $post_query_count = "SELECT * FROM posts WHERE post_status = 'publish'";
            }
            $find_count = mysqli_query($link, $post_query_count);
            $count = mysqli_num_rows($find_count);
            if($count < 1){
                echo "<center><div class='alert alert-info'><strong>Sorry!</strong> No post abilable.....</div></center>";
            }
            else {
            $count = ceil($count / 5);
            $query = "SELECT * FROM posts ORDER BY post_id DESC  LIMIT $page_1,$per_page";

            if(isset($_GET['search'])){
                global $query;
                $search = $_GET['search'];
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' OR post_title LIKE 
                '%$search%' AND post_status = 'publish' ORDER BY post_id DESC LIMIT $page_1,$per_page";
            }

            if(isset($_GET['category_id'])){
                $category_id = $_GET['category_id'];
                $query = "SELECT * FROM posts
                 WHERE post_category_id = '$category_id' AND post_status = 'publish' ORDER BY post_id DESC LIMIT $page_1,$per_page";
            }
            


            if(mysqli_num_rows($select_all_posts_query = mysqli_query($link,$query)) <= 0){
                echo "<center><div class='alert alert-info'><strong>Sorry!</strong> No post abilable.....</div></center>"; 
            }else{
            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_tags = $row['post_tags'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'],0,400).'...';
                $post_status = $row['post_status']; 
            
?>


				<div class="col-sm-12 single-item-box">
					<div class="single-item">
						<div class="img-box">
							<a href="blog-post.php?post_id=<?php echo $post_id; ?>"><img src="admin/dist/img/blog/<?php echo$post_image; ?>" alt="" class="img-responsive"></a>
							<span><a href="#" class="overlay"></a></span>
							<div class="img-caption">
								<p class="date"><span>24</span><span>Mar</span></p>
							</div>
						</div>
						<div class="single-text-box">
							<h3><a href="blog-post.php?post_id=<?php echo $post_id; ?>"> <?php echo $post_title; ?> </a></h3>
							<ul class="list-unstyled">
								<li><a href="blog-post.php?post_id=<?php echo $post_id; ?>">By Admin</a></li>
								<li><a href="blog-post.php?post_id=<?php echo $post_id; ?>">20 March, 2020 </a></li>
								<li><a href="blog-post.php?post_id=<?php echo $post_id; ?>"> 0 comments </a></li>	
							</ul>
							<p>
							<?php echo $post_content; ?>
							<div class="blog-btn-box">
								<a href="blog-post.php?post_id=<?php echo $post_id; ?>">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<?php
                                    }}}
                ?>


				<!-- <div class="col-sm-12 single-item-box">
					<div class="single-item">
						<div class="img-box">
							<a href="blog-post.php">
							<img src="images/blog/blog-02.jpg" alt="" class="img-responsive"></a>
							<span><a href="#" class="overlay"></a></span>
							<div class="img-caption">
								<p class="date"><span>22</span><span>Mar</span></p>
							</div>
						</div>
						<div class="single-text-box">
							<h3><a href="blog-post.php"> Study and Live in Cyrpus with #700, 000  </a></h3>
							<ul class="list-unstyled">
								<li><a href="#">By Admin</a></li>
								<li><a href="#">20 March, 2020 </a></li>
								<li><a href="#"> 0 comments </a></li>	
							</ul>
							<p>
							Cyprus costs of living are also surprisingly low, and in fact lower
							 than in most other European countries. A place in a student dormitory may
							  cost less than 800 CAD per month for a shared room. Overall, 
							  depending on the city on what lifestyle you desire, 
							  you might get by on less than 500 CAD per month
							</p>
							<div class="blog-btn-box">
								<a href="blog-post.php">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 single-item-box">
					<div class="single-item">
						<div class="img-box">
							<a href="blog-post.php">
							<img src="images/blog/blog-03.jpg" alt="" class="img-responsive"></a>
							<span><a href="#" class="overlay"></a></span>
							<div class="img-caption">
								<p class="date"><span>22</span><span>Mar</span></p>
							</div>
						</div>
						<div class="single-text-box">
							<h3><a href="blog-post.php">
							Admission into a canada university within 2 months
							</a></h3>
							<ul class="list-unstyled">
								<li><a href="#">By Admin</a></li>
								<li><a href="#">20 March, 2020 </a></li>
								<li><a href="#"> 0 comments </a></li>	
							</ul>
							<p> 
							Canada costs of living are also surprisingly low, and in fact lower than in most other European countries.
							A place in a student dormitory may cost less than 800 CAD per month for a shared room. Overall, 
							depending on the city on what lifestyle you desire, you might get by on less than 500 CAD per month
							</p>
							<div class="blog-btn-box">
								<a href="blog-post.php">Read More</a>
							</div>
						</div>
					</div>
				</div> -->


				<div class="row">
					<div class="col-sm-12 text-center">
						<nav aria-label="Page navigation">
						  	<ul class="pagination">
						    	<li class="page-item">
							      	<a class="page-link" href="#" aria-label="Previous">
							       	 	<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
							        	<span class="sr-only">Previous</span>
							      	</a>
							    </li>
							    <li class="page-item active"><a class="page-link active" href="#">1</a></li>
							    <li class="page-item"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      	<a class="page-link" href="#" aria-label="Next">
							        	<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
							        	<span class="sr-only">Next</span>
							      	</a>
							    </li>
						  	</ul>
						</nav>
					</div>
				</div>	
			</div>



			<div class="col-sm-4 blog_side-right">
				<div class="sidebar-content">

					<div class="row">
					<div class="col-sm-12 recent-post-01">
							<h3> Recent Posts </h3>
							<div class="row">


<?php
	$query = "SELECT * FROM posts WHERE post_status = 'publish' ORDER BY post_id DESC LIMIT 3";
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_assoc($result)){
			$post_id = $row['post_id'];
			$post_title = $row['post_title'];
			$post_date = $row['post_date'];
			$post_image = $row['post_image'];
?>
								<div class="col-sm-12 recent-single">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="admin/dist/img/blog/<?php echo $post_image; ?>" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="blog-post.php?post_id=<?php echo $post_id; ?>"> <?php echo $post_title; ?> </a>
							                <p><?php echo $post_date; ?><span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div><!-- /.recent-single-item -->
<?php 
}
?>

								<div class="col-sm-12 recent-single">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="images/blog/recent-work-02.jpg" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#"> Admission into a canada university within 2 months </a>
							                <p>20 Mar, 2020 <span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div><!-- /.recent-single-item -->

								<div class="col-sm-12 recent-single blog-padding-none">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="images/blog/recent-work-02.jpg" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#"> The Uniqueness of QS-Hub </a>
							                <p>20 Mar, 2020 <span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div><!-- /.recent-single-item -->
							</div>
						</div>	

					</div>

                    <div class="row">
						<div class="col-sm-12">
							<div class="categories-item">
								<h3>Categories</h3>
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-angle-right"></i> Qs-Hub <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Academics <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Works <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Abroad <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Study  <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Travels <span>(0)</span></a></li>
								</ul>
							</div>
						</div>
					</div>    

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3> The Tags </h3>
							<div class="populer-tags">		
								<div class="tagcloud">
									<a href="#">Qs-hub</a>
									<a href="#">Education</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">quotaways</a>
									<a href="#">services</a>
									<a href="#">gallery</a>
									<a href="#">benin</a>
									<a href="#">Warri</a>
								</div>
							</div>
						</div>	
					</div>
                    <br> 
                    <div class="row"> 
					<div class="col-sm-12 blog-padding-none">
							<div class="social-icon">
								<h3> Social Widget </h3>
								<div class="row">
									<div class="col-sm-12">
										<ul class="list-unstyled">
											<li><a href="#" class="rss"><i class="fa fa-rss"></i>rss feed</a></li>
											<li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Follow us</a></li>
											<li><a href="#" class="facebook"><i class="fa fa-facebook"></i>like us</a></li>
											<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i>follow us</a></li>
											<li><a href="#" class="instagram"><i class="fa fa-instagram"></i>follow us</a></li>
											<li><a href="#" class="google"><i class="fa fa-google-plus"></i>plus 1 us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>	 
					</div>

				</div>
			</div>

		</div>
	</div>	
</div>	

<!-- Footer Area section -->
<?php require_once 'fils/footer.php';  ?>

<!-- ./ End Footer Area-->
<?php require_once 'fils/scripts.php';  ?>

</body>
</html>
