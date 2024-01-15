	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/logo3.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Museum Heritage Revolution</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
		<?php
			include "koneksi.php";
			$karya_seni = mysqli_query($con, "SELECT * FROM karya_seni WHERE id_karyaseni	 = '2'");
			$cetak_karyaseni = mysqli_fetch_array($karya_seni );
		?>
		<?php
			include "koneksi.php";
			$karya_seni1 = mysqli_query($con, "SELECT * FROM karya_seni WHERE id_karyaseni	 = '3'");
			$cetak_karyaseni1 = mysqli_fetch_array($karya_seni1);
		?>
		<?php
			include "koneksi.php";
			$karya_seni2 = mysqli_query($con, "SELECT * FROM karya_seni WHERE id_karyaseni	 = '4'");
			$cetak_karyaseni2 = mysqli_fetch_array($karya_seni2);
		?>
		<?php
			include "koneksi.php";
			$karya_seni3 = mysqli_query($con, "SELECT * FROM karya_seni WHERE id_karyaseni	 = '5'");
			$cetak_karyaseni3 = mysqli_fetch_array($karya_seni3);
		?>

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		<div class="col-6 top-head-left">
				  			<ul>
				  				<!-- <li><a href="admin/login_admin.php">Admin</a></li>
				  				<li><a href="ticket.php">Beli Ticket</a></li> -->
				  			</ul>
				  		</div>
				  		<div class="col-6 top-head-right">
				  			<ul>
		  						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo2.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="home.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="gallery.php">Gallery</a></li>
				          <li><a href="event.php">Events</a></li>
				          <li><a href="ticket.php">Ticket</a></li>
				          <li><a href="blog-home.php">Artworks</a></li>
				          <li><a href="contact.php">Contact</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="singout.php">SingOut</a></li>
				              <li><a href="category.php">Category</a></li>
				              <li><a href="elements.php">Elements</a></li>
				            </ul>
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Artworks				
							</h1>	
							<p class="text-white link-nav"><a href="home.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-home.php"> Artworks</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="img/<?= $cetak_karyaseni['gambar_karya_seni']; ?>" alt="">
								<ul class="tags">
									<li><a href="#"><?= $cetak_karyaseni['th_pembuatan']; ?></a></li>
									<li><a href="#">, <?= $cetak_karyaseni['seniman']; ?></a></li>
									
								</ul>
								<a href="blog-single.html">
									<h1>
										<?= $cetak_karyaseni['nama_karya']; ?>
									</h1>
								</a>
									<p>
										<?= $cetak_karyaseni['deskripsi']; ?>
									</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							<div class="single-post">
								<img class="img-fluid" src="img/<?= $cetak_karyaseni1['gambar_karya_seni']; ?>" alt="">
								<ul class="tags">
									<li><a href="#"><?= $cetak_karyaseni1['th_pembuatan']; ?></a></li>
									<li><a href="#">, <?= $cetak_karyaseni1['seniman']; ?></a></li>
								</ul>
								<a href="blog-single.html">
									<h1>
										<?= $cetak_karyaseni1['nama_karya']; ?>
									</h1>
								</a>	
									<p>
										<?= $cetak_karyaseni1['deskripsi']; ?>
									</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							<div class="single-post">
								<img class="img-fluid" src="img/<?= $cetak_karyaseni2['gambar_karya_seni']; ?>" alt="">
								<ul class="tags">
									<li><a href="#"><?= $cetak_karyaseni2['th_pembuatan']; ?></a></li>
									<li><a href="#">, <?= $cetak_karyaseni2['seniman']; ?></a></li>
								</ul>
								<a href="blog-single.html">
									<h1>
										<?= $cetak_karyaseni2['nama_karya']; ?>
									</h1>
								</a>
									<p>
										<?= $cetak_karyaseni2['deskripsi']; ?>
									</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							<div class="single-post">
								<img class="img-fluid" src="img/<?= $cetak_karyaseni3['gambar_karya_seni']; ?>" alt="">
								<ul class="tags">
									<li><a href="#"><?= $cetak_karyaseni3['th_pembuatan']; ?></a></li>
									<li><a href="#">, <?= $cetak_karyaseni3['seniman']; ?></a></li>
								</ul>
								<a href="blog-single.html">
									<h1>
										<?= $cetak_karyaseni3['nama_karya']; ?>
									</h1>
								</a>
									<p>
										<?= $cetak_karyaseni3['deskripsi']; ?>
									</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>																					
						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Search Posts" name="search2">
								  <button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>

							<div class="single-widget protfolio-widget">
								<img src="img/blog/user2.jpg" alt="">
								<a href="#"><h4>Adele Gonzalez</h4></a>
								<p>
									MCSE boot camps have its supporters and
									its detractors. Some people do not understand why you should have to spend money
									on boot camp when you can get.
								</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Post Categories</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>
								</ul>
							</div>

							<div class="single-widget recent-posts-widget">
								<h4 class="title">Recent Posts</h4>
								<div class="blog-list ">
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r1.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r2.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r3.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r4.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>																																					
								</div>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Post Archive</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6> <span>37</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6> <span>24</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6> <span>59</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6> <span>29</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6> <span>15</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6> <span>09</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6> <span>44</span></a></li>
								</ul>
							</div>			

							<div class="single-widget tags-widget">
								<h4 class="title">Tag Clouds</h4>
								 <ul>
								 	<li><a href="#">Lifestyle</a></li>
								 	<li><a href="#">Art</a></li>
								 	<li><a href="#">Adventure</a></li>
								 	<li><a href="#">Food</a></li>
								 	<li><a href="#">Techlology</a></li>
								 	<li><a href="#">Fashion</a></li>
								 	<li><a href="#">Architecture</a></li>
								 	<li><a href="#">Food</a></li>
								 	<li><a href="#">Technology</a></li>
								 </ul>
							</div>				

						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/justified.min.js"></script>					
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>


