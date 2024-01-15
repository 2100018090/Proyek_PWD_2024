<?php
// Memanggil file koneksi.php
include_once("koneksi.php");
session_start();

if (isset($_POST['submit'])) {
    if ($_POST['submit']) {

		// Set session untuk menandai bahwa tiket telah dipesan
		$_SESSION['tiket_dipesan'] = true;

        // $total_harga = $_POST['total_harga'];
        $tgl_beli = $_POST['tgl_beli'];
        $jumlah_tiket = $_POST['jumlah_tiket'];
        $nama_pengunjung = $_POST['nama_pengunjung'];
        $asal = $_POST['asal'];
        $email = $_POST['email'];
		$no_telp = $_POST['no_telp'];
        $jenis_tiket = $_POST['jenis_tiket'];

        $status = "Proses"; // Tetapkan nilai "Proses" ke status

        $results = array(); // Initialize an empty array

        if ($jenis_tiket === 'Group') {
            $harga = 30000; // Set the base price for both Group and Personal
            $diskon = 0.10; // 10% discount for Group
            $results['total_harga'] = $harga * $jumlah_tiket - ($harga * $jumlah_tiket * $diskon);
        } elseif ($jenis_tiket === 'Personal') {
            $harga = 30000; // Set the base price for both Group and Personal
            $results['total_harga'] = $harga * $jumlah_tiket; // No discount for Personal
        } else {
            $results['total_harga'] = 0; // Invalid ticket type, so total price is 0
        }

        // Now you can access $results['total_harga'] without the warning

        $totalTiket = $jumlah_tiket * $harga;

        // Syntax untuk menambahkan data ke tabel tiket
        $stmt_tiket = $con->prepare("INSERT INTO tiket (jenis_tiket, harga) VALUES (?, ?)");
        $stmt_tiket->bind_param("sd", $jenis_tiket, $harga);
        $result_tiket = $stmt_tiket->execute();
        $last_inserted_id_tiket = $stmt_tiket->insert_id;

        // Syntax untuk menambahkan data ke tabel pengunjung
        $stmt_pengunjung = $con->prepare("INSERT INTO pengunjung (id_tiket, nama_pengunjung, asal, email, no_telp) VALUES (?, ?, ?, ?, ?)");
        $stmt_pengunjung->bind_param("issss", $last_inserted_id_tiket, $nama_pengunjung, $asal, $email, $no_telp);
        $result_pengunjung = $stmt_pengunjung->execute();
        $last_inserted_id_pengunjung = $stmt_pengunjung->insert_id;

        // Syntax untuk menambahkan data ke tabel transaksi
        $stmt_transaksi = $con->prepare("INSERT INTO transaksi (tgl_beli, jumlah_tiket, id_tiket, id_pengunjung, total_harga, status) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt_transaksi->bind_param("siiiss", $tgl_beli, $jumlah_tiket, $last_inserted_id_tiket, $last_inserted_id_pengunjung, $results['total_harga'], $status);
        $result_transaksi = $stmt_transaksi->execute();

        // Cek keberhasilan eksekusi query
        if ($result_tiket && $result_pengunjung && $result_transaksi) {
            echo "<script>alert('Anda berhasil membeli tiket');</script>";
        } else {
            // Tampilkan pesan kesalahan
            echo "Error: " . $con->error;
        }

        // Tutup prepared statements
        $stmt_tiket->close();
        $stmt_pengunjung->close();
        $stmt_transaksi->close();

    } else {
        echo "Data gagal disimpan";
    }
}
?>

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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/pertemuan1.css"> 
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
				        <a href="index.php"><img src="img/logo2.png" alt="" title="" /></a>
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
								Buy Tickets
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ticket.html"> Tickets</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- tiket -->
			<div class = "tiket2">
				<div class="tiket">
	        		<h1 class="form-title">Pemesanan Tiket</h1>
	        		<form action="" method="post"> 
	            		<div class="main-user-info">
	                		<div class="main-user-info">
	                    		<div class="user-input-box">
									<label for="nama_pengunjung">Name</label>  
									<input type="text" id="nama_pengunjung" name="nama_pengunjung" placeholder="Name">
	                    		</div>
	                    		<div class="user-input-box">
									<label for="tgl_beli">Tanggal</label>  
									<input type="date" id="tgl_beli" name="tgl_beli" placeholder="Tanggal">
	                    		</div>
								<div class="user-input-box">
									<label for="email">Email</label>  
									<input type="email" id="email" name="email" placeholder="Email">
								</div>
								<div class="user-input-box">
									<label for="no_telp">Phone Number</label>  
									<input type="number" id="no_telp" name="no_telp" placeholder="No_Telp">
								</div>
								<div class="user-input-box">
									<label for="asal">Asal</label>  
									<input type="text" id="asal" name="asal" placeholder="Asal">
								</div>
								<div class="user-input-box">
									<label for="jumlah_tiket">Jumlah Tiket</label>  
									<input type="number" id="jumlah_tiket" name="jumlah_tiket" placeholder="Jumlah_Tiket">
								</div>
	                    		<div class="gender-details-box">
	                        		<span class = "gender-title">Jenis Tiket</span> 
	                        		<div class = "gender-category">
	                        			<input type="radio" id="jenis_tiket" name="jenis_tiket" value = "Group">
	                        			<label for="Group">Group</label>
	                        			<input type="radio" id="jenis_tiket" name="jenis_tiket" value = "Personal">
	                        			<label for="Personal">Personal</label>
										<i class="fa-solid fa-print" style="color: white;" id="cetak_icon"></i>
										<label for="Cetak" nama="cetak" id="cetak">Cetak</label>
										<script>
											// Mendapatkan elemen dengan id 'dashboardLink'
											var dashboardLink = document.getElementById('cetak');

											// Menambahkan event listener untuk menanggapi klik pada elemen
											dashboardLink.addEventListener('click', function() {
												// Pindah ke halaman lain
												window.location.href = 'fungsi.php';
											});
										</script>
										<script>
											// Mendapatkan elemen dengan id 'dashboardLink'
											var dashboardLink = document.getElementById('cetak_icon');

											// Menambahkan event listener untuk menanggapi klik pada elemen
											dashboardLink.addEventListener('click', function() {
												// Pindah ke halaman lain
												window.location.href = 'fungsi.php';
											});
										</script>
	                        		</div>
	                    		</div>
	            			</div>
	            			<div class="form-submit-btn">
	                			<input type="submit" name="submit" value="Pembelian Tiket">
	            			</div>
						</div>
	        		</form>
	    		</div>
			</div>


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



