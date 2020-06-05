<!doctype html>
<html class="no-js" lang="en">
<head>
<title> News Updates :: Quotaway Services </title>         
<?php require_once 'fils/head.php';  ?>	
</head>
<body class="post-1">

<?php require_once 'fils/headnav.php';  ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1> News Updates </h1>
						<p><span><a href="index.php"> Home <i class='fa fa-angle-right'></i></a></span>
						<span class=""><a href="blog.php"> News <i class='fa fa-angle-right'></i></a></span> </a>
						<span class="b-active"> News Post </span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container --> 

	</div>
</header>

<div class="post_1_area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
										<?php 

						try {
							$post_id = $_GET['post_id'];
							$query = "SELECT * FROM posts WHERE post_id = '$post_id'  LIMIT 1";
							$result = mysqli_query($link, $query);
							$row = mysqli_fetch_assoc($result);
							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_author = $row['post_author'];
							$post_date = $row['post_date'];
							$post_tags = $row['post_tags'];
							$post_image = $row['post_image'];
							$post_content = $row['post_content'];
							$post_status = $row['post_status']; 
							$post_category_id = $row['post_category_id'];

							$query = "SELECT * FROM categories WHERE cat_id = '$post_category_id'";
							$result = mysqli_query($link, $query);
							$row = mysqli_fetch_assoc($result);
							$category = $row['cat_title'];
							$fancyDate = explode(' ', $post_date);
							$month =   substr($fancyDate[1], 0 ,3);
							$day = $fancyDate[2];

						} catch (\Throwable $th) {
							//throw $th;
							echo "<center><div class='alert alert-info'><strong>Sorry!</strong> No post abilable.....</div></center>";
						}
						?>
					<div class="col-sm-12">
						<div class="post-img-box">
						<img src="admin/dist/img/blog/<?php echo $post_image;?>" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<div class="time">
									<span> <?=$day?> </span>
									<span> <?=$month?> </span>
								</div>
								<h3> <?php echo $post_title; ?> </h3>
							</div>
							<div class="description-text">
								<div class="row">
									
									<div class="col-sm-11">
										<div class="description-text-right">
										<?php echo $post_content; ?>
										<!-- <p>
							            The QS Hub is a subsidiary of the quota way services. 
							            It's an Educaonal hub which provides a creave and technology driven 
							            space for young persons to interact, learn and network. 
							            </p>
										<p>
							            Our vision is to develop the next generaon of African leaders by providing 
							            them with quality educaon and expose them to new learning experiences and methods.
							            The Hub provides a plaorm where persons can achieve both their educaonal and professional dreams.           
										</p>

							            <strong> WHAT WE OFFER: </strong> 
							            
										<p>
							            Training Programs at QS HUB, you can enroll in one or more of our educaonal programs designed 
							            by our experienced educational consultants and tutors to give our students their best learning experience, yet.
							            Some of our courses include SAT IELTS GMAT ICAN BUSINESS AND LEADERSHIP DEVELOPMENT. ETC. 
							            </p>

							            <b> Mini Event Space: </b> The QS HUB is event friendly. 
							            It is very conducive for events for not more than 40 persons.
							            It is full air condioned, constant power supply, excellent interior design and 24/7data connecon. 
							            The hub is also equipped with a digital Library for students to study and do research. 
							            You can register with us and enjoy free internet connecon and endless research materials. 
							            </p> -->

										</div>
									</div> 
									<div class="col-sm-1">
										<div class="description-side-left">
										    <br><br>
											<ul class="list-unstyled">
												<li><i class="fa fa-eye"></i> 0 </li>
												
												<li><i class="fa fa-comment-o"></i> 0 </li>
											</ul>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="tag-links-box">
											<p>Tags:</p>
											<ul class="list-unstyled">

									<?php
                                    $tags = $post_tags;
                                    $tags = explode(',',$tags);
                                    foreach ($tags as $tag) {
                                        echo"<li><a href='blog.php?tag=$tag'>$tag</a></li>";
                                    }
                                    ?>
												<!-- <li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>
												<li><a href="#"> Qs-hub </a></li>	 -->
											</ul>	
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-md-12 post_slider">
						<div class="row">
							<h3>Related Posts</h3>
							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img">
										<img src="images/blog/post-01.jpg" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#"> Admission into a canada university within 2 months  </a></h4>
											<p><span>By Admin </span> | <span> 20 March, 2020 </span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->


							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><img src="images/blog/post-02.jpg" alt="" class="img-responsive"></div>
										<figcaption>
											<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#"> Study in Cyrpus with #700,000 </a></h4>
											<p><span> By Admin </span> | <span>20 Mar, 2020 </span></p>
										</div>
									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->

							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img">
										<img src="images/blog/post-03.jpg" alt="" class="img-responsive">
										</div>
										<figcaption>
										<div><a href="#" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#"> The Uniqueness of QS-Hub </a></h4>
											<p><span>By Admin </span> | <span> 20 Mar, 2020 </span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->
						</div>
					</div><!--End .row-->

					<!--div class="col-md-12 comments">							
						<div class="row">
							<h3>Comments</h3>
							<div class="col-sm-12 comment-single-item">
								<div class="col-sm-1 img-box">
									<img src="images/Single_cources/comment-01.jpg" alt="" class="img-circle">
								</div>
								<div class="col-sm-11 comment-left-bar">
									<div class="comment-text">
										<ul class="list-unstyled comment-author-box">
											<li> <span class="name">James Smith</span> <span>
											November 11, 2019 
											</span></li>
											<li class="reply"><a href="#">Reply</a></li>
										</ul>
										<p>
										   “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. 
										   Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. 
										   Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et
										    elementum vulputate.
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 comment-single-item reply_text">
								<div class="row">
									<div class="col-sm-1 img-box">
										<img src="images/Single_cources/comment-01.jpg" alt="" class="img-circle">
									</div>
									<div class="col-sm-11 comment-left-bar">
										<div class="comment-text">
											<ul class="list-unstyled comment-author-box">
												<li> <span class="name">James Smith</span> <span>
												November 11, 2019 
												</span></li>
											</ul>
											<p>
											   “Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											   Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula 
											   tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. 
											   Morbi lacinia libero et elementum vulputate.
											</p>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-sm-12 comment-single-item">
								<div class="col-sm-1 img-box">
									<img src="images/Single_cources/comment-01.jpg" alt="" class="img-circle">
								</div>
								<div class="col-sm-11 comment-left-bar">
									<div class="comment-text">
										<ul class="list-unstyled comment-author-box">
											<li> <span class="name">James Smith</span> <span>
											November 11, 2019 
											</span></li>
											<li class="reply"><a href="#">Reply</a></li>
										</ul>
										<p> 
										    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque.
										    Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. 
											Vestibulum interdum diam non mi cursus venenatis. 
											Morbi lacinia libero et elementum vulputate.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div-->

					<div class="col-sm-12">
						<div class="leave-comment-box">
	                        <div class="comment-respond">
	                            <div class="comment-reply-title">
	                                <h3>Leave a Reply</h3>
	                            </div>
	                            <div class="comment-form">
	                                <form>
		                                <div class="row">
		                               		<div class="col-sm-12">
			                                	<div class="form-group">
			                                        <textarea class="form-control" rows="8" placeholder="Type Your Comments"></textarea>
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-12">
			                                    <div class="form-group">
			                                        <input type="text" class="form-control" placeholder="Your Name">
			                                    </div>
		                                    </div>
		                                    
		                                    		
		                                    <div class="col-sm-12">                                    
			                                    <div class="full-width">
			                                        <input value="Submit"  type="submit">
			                                    </div>
		                                    </div>	
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>	
			</div>

			<div class="col-sm-4">
				<div class="sidebar-text-post">							
					<div class="row">
						<div class="col-sm-12 recent-post">
							<h3>Recent Post</h3>
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
										<div class="img-box"><a href="blog-post.php?post_id=<?php echo $post_id; ?>">
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

								<!-- <div class="col-sm-12 recent-single">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="images/blog/recent-01.jpg" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#"> Study and Live in Cyrpus with #700, 000 </a>
							                <p>20 Mar, 2020 <span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div>/.recent-single-item -->

								<!-- <div class="col-sm-12 recent-single">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="images/blog/recent-work-01.jpg" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#"> Admission into a canada university within 2 months </a>
							                <p>20 Mar, 2020 <span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div>/.recent-single-item -->

								<!-- <div class="col-sm-12 recent-single blog-padding-none">
									<div class="recent-content-item">
										<div class="img-box"><a href="#">
										<img src="images/blog/recent-work-01.jpg" alt=""></a></div>
										<div class="recent-text pull-right">
							                <a href="#"> The Uniqueness of QS-Hub </a>
							                <p>20 Mar, 2020 <span class="content">
											<i class="fa fa-comments"></i>0</span></p>
							            </div>
									</div>
								</div>/.recent-single-item -->

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h3>Categories</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">

								<?php
                        $category_query = "SELECT * FROM categories";
                         $categories = mysqli_query($link, $category_query);
                         $allPosts = mysqli_num_rows(mysqli_query($link,"SELECT * FROM posts"));
					?>
					<li><a href="blog.php"><i class="fa fa-angle-right"></i> All <span>(<?=$allPosts?>)</span></a></li>
					<?php 
                        while($cat = mysqli_fetch_assoc($categories)){
                            $title = $cat['cat_title'];
                            $id = $cat['cat_id'];
                            $numberOfPosts = mysqli_num_rows(mysqli_query($link,"SELECT * FROM posts
                             WHERE post_category_id ='$id' AND post_status = 'publish' "));
							// echo "<li class='cat-item cat-item-3'><a href='blog.php?category_id=$id'>$title</a> ($numberOfPosts)</li>";
							echo"<li><a href='blog.php?category_id=$id'><i class='fa fa-angle-right'></i> $title <span>($numberOfPosts)</span></a></li>";
                        }
                        ?>
									<!-- <li><a href="#"><i class="fa fa-angle-right"></i> Qs-Hub <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Academics <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Works <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Abroad <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Study  <span>(0)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> Travels <span>(0)</span></a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3> The Tags </h3>
							<div class="populer-tags">		
								<div class="tagcloud">

								<?php
                                    $tags = $post_tags;
                                    $tags = explode(',',$tags);
                                    foreach ($tags as $tag) {
										echo "<a href='blog.php?tag=$tag'>$tag</a>";
                                    }
                                    ?>
									<!-- <a href="#">Qs-hub</a>
									<a href="#">Education</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">quotaways</a>
									<a href="#">services</a>
									<a href="#">gallery</a>
									<a href="#">benin</a>
									<a href="#">Warri</a> -->
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
