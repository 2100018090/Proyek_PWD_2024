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
			$koleksi = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '3'");
			$cetak_koleksi = mysqli_fetch_array($koleksi);
		?>
		<?php
			include "koneksi.php";
			$koleksi1 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '4'");
			$cetak_koleksi1 = mysqli_fetch_array($koleksi1);
		?>
		<?php
			include "koneksi.php";
			$koleksi2 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '5'");
			$cetak_koleksi2 = mysqli_fetch_array($koleksi2);
		?>
		<?php
			include "koneksi.php";
			$koleksi3 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '6'");
			$cetak_koleksi3 = mysqli_fetch_array($koleksi3);
		?>
		<?php
			include "koneksi.php";
			$koleksi4 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '7'");
			$cetak_koleksi4 = mysqli_fetch_array($koleksi4);
		?>
		<?php
			include "koneksi.php";
			$koleksi5 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '8'");
			$cetak_koleksi5 = mysqli_fetch_array($koleksi5);
		?>
		<?php
			include "koneksi.php";
			$koleksi6 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '9'");
			$cetak_koleksi6 = mysqli_fetch_array($koleksi6);
		?>
		<?php
			include "koneksi.php";
			$koleksi7 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '10'");
			$cetak_koleksi7 = mysqli_fetch_array($koleksi7);
		?>
		<?php
			include "koneksi.php";
			$koleksi8 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '11'");
			$cetak_koleksi8 = mysqli_fetch_array($koleksi8);
		?>
		<?php
			include "koneksi.php";
			$koleksi9 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '12'");
			$cetak_koleksi9 = mysqli_fetch_array($koleksi9);
		?>
		<?php
			include "koneksi.php";
			$koleksi10 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '13'");
			$cetak_koleksi10 = mysqli_fetch_array($koleksi10);
		?>
		<?php
			include "koneksi.php";
			$koleksi11 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '14'");
			$cetak_koleksi11 = mysqli_fetch_array($koleksi11);
		?>
		<?php
			include "koneksi.php";
			$koleksi12 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '15'");
			$cetak_koleksi12 = mysqli_fetch_array($koleksi12);
		?>
		<?php
			include "koneksi.php";
			$koleksi13 = mysqli_query($con, "SELECT * FROM koleksi WHERE id_koleksi = '17'");
			$cetak_koleksi13 = mysqli_fetch_array($koleksi13);
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
								Art Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start gallery Area -->
			<section class="gallery-area section-gap gallery-page-area" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Exhibition Gallery</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>						
					<div id="grid-container" class="row">
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi1['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi1['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi2['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi2['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi3['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi3['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi4['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi4['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi5['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi5['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi6['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi6['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi7['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi7['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi8['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi8['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi9['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi9['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi10['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi10['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi11['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi11['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi12['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi12['gambar_koleksi']; ?>"></a>
						<a class="single-gallery" href="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi13['gambar_koleksi']; ?>"><img class="grid-item" src="img/gallery-20240113T174808Z-001/gallery/<?= $cetak_koleksi13['gambar_koleksi']; ?>"></a>						
					</div>	
				</div>	
			</section>
			<!-- End gallery Area -->			
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Our Blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b1.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b4.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Addiction When Gambling
							Becomes A Problem</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->

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



