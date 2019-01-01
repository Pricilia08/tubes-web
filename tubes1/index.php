	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>PetShelter</title>

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
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About Us</a></li>
				          <li><a href="volunteer.php">Volunteer</a></li>					          
				          <li><a href="contact.php">Contact</a></li>
				          <li class="menu-has-children"><a href="">Animal</a>
				            <ul>
				              <li><a href="cats.php">Cats</a></li>	
				              <li><a href="dogs.php">Dogs</a></li>
					        </ul>
				          </li>
				          <li class="nav-item">
				             <a class="nav-link" href="login.php">Login</a>
				          </li>
				          <li class="nav-item">
				             <a class="nav-link" href="register.php">Register</a>
				          </li>		              
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h1 class="text-uppercase">
								Adopt Us. <br>
								We need your help.		
							</h1>
							<p class="text-white sub-head">
								Ulur tangan kalian sangat dibutuhkan. Jangan menelantarkan kami dijalanan! jangan memukul kami!  
							</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start image-carusel Area -->
			<section class="image-carusel-area">
				<div class="container">
					<div class="row">
						<div class="active-image-carusel">
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c1.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c2.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c3.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c4.jpg" alt="">
							</div>	
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c3.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c2.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c1.jpg" alt="">
							</div>
							<div class="single-image-carusel">
								<img class="img-fluid" src="img/c4.jpg" alt="">
							</div>															
						</div>
					</div>
				</div>	
			</section>
			<!-- End image-carusel Area -->
			

			<!-- Start callto-top Area -->
			<div class="container">
			 <div class="card my-4">
	            <h5 class="card-header">Search</h5>
	            <form action="search_berita.php" method="post">
	            <div class="card-body">
	                <div class="input-group">
	                  <input type="text" class="form-control" name="cari" placeholder="Search for...">
	                  <span class="input-group-btn">
	                    <button class="btn btn-secondary" type="submit" name="submit">Search</button>
	                  </span>
	                </div>
	            </div>
	            </form>
	          </div>
	        </div>
			<!-- End callto-top Area -->
			

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container">
					<div class="row">
        				<div class="col-md-8">
							<?php  
            				include("include/config.php");
            				if (isset($_GET['pageno'])) {
             			   		$pageno = $_GET['pageno'];
            				} else {
                				$pageno = 1;
            				}
            				$no_of_records_per_page = 5;
            				$offset = ($pageno-1) * $no_of_records_per_page;
				            $total_pages_sql = "SELECT COUNT(*) FROM berita";
				            $result = mysqli_query($conn,$total_pages_sql);
				            $total_rows = mysqli_fetch_array($result)[0];
				            $total_pages = ceil($total_rows / $no_of_records_per_page);

				            $sql = "SELECT * FROM berita order by id_berita desc LIMIT $offset, $no_of_records_per_page ";
				            $res_data = mysqli_query($conn,$sql);
				            $no = 1;
				            while($row = mysqli_fetch_array($res_data)){
				                $berita_id = $row[0];
          					?>
          					<div class="card mb-4">
            				<img width=200px height=200px src="<?php echo 'img/'.$row[3]; ?>" alt="Card image cap">
            					<div class="card-body">
              					<h2 class="card-title"><?php echo $row[1]; ?></h2>
              					<p class="card-text"><?php echo substr($row[2], 0,200); ?></p>
              					<a href="berita.php?id=<?php echo $berita_id ?>" class="btn btn-primary">Read More &rarr;</a>
            					</div>
            					<div class="card-footer text-muted">
              					Posted on <?php echo $row[4]; ?> by Admin
            					</div>
          					</div>
         					<?php } ?>
          					<ul class="pagination justify-content-center mb-4">
            					<li class="page-item">
              						<a class="page-link" href="?pageno=1">&larr; First</a>
            					</li>
            					<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
              						<a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
            					</li>
            					<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              						<a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
            					</li>
           						<li class="page-item">
              						<a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last &rarr;</a>
            					</li>
          					</ul>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start process Area -->
			<section class="process-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Process to adopt a pet</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-thumbs-up"></span>
									<h4>
										Pet Selection
									</h4>
								<p>Memilih atau menyeleksi hewan yang ingin diadopsi.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-user"></span>
									<h4>
										Meeting Authority
									</h4>
								<p>Bertemu dengan Volunteer (sukarelawan) yang ingin mengadopsi.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-license"></span>
									<h4>
										Adoption Form Filling
									</h4>
								<p>Mengisi form untuk proses pengadopsian.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-magic-wand"></span>
									<h4>
										Bring to new family
									</h4>
								<p>Membawa hewan peliharaan ke keluarga barunya.</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End process Area -->			
			
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row pt-120 pb-80">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>Kami adalah tempat pengadosian hewan terkhusukan untuk kucing dan anjing saja. Hewan yang ada di tempat kami adalah hewan jalanan atau hewan yang terlantar dan hewan yang diberikan pada kami secara langsung. Kami merawat dan memelihara  mereka serta berharap agar mereka ada yang memilikinya kembali.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
						</div>						
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contact Us</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Indramayu, Jawa Barat</h4>
											<p>
												Jatibarang-Indramayu 45273
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>(+62)89 692 196 709</h4>
											<p>
												Mon to Fri 9am to 6 pm
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>priciliadwiwidya@gmail.com</h4>
											<p>
												Send us your query anytime!
											</p>
										</div>	
									</li>																		
								</ul>
							</div>
						</div>						
					</div>
				</div>
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<div class="col-lg-4 col-sm-6 footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
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
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>