	<?php  
    session_start();  
      
    if(!$_SESSION['nama_vol'])  
    {  
      
        header("Location: login.php");
    } 

    $user = $_SESSION['user'];
      
	?>  

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
		<title>Petshelter</title>

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
				          <li class="menu-active"><a href="user.php">Home</a></li>
				          <li><a href="user_about.php">About Us</a></li>
				          <li><a href="volunteer.php">Volunteer</a></li>
				          <li><a href="user_contact.php">Contact</a></li>
				          <li class="menu-has-children"><a href="">Animal</a>
				            <ul>
				              <li><a href="user_cats.php">Cats</a></li>
				          	  <li><a href="user_dogs.php">Dogs</a></li>
				            </ul>
				          </li>
				          <li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				            <?php echo $user;?>
				            </a>
				            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
				          	   <a class="dropdown-item" href="logout.php">Logout</a>   
				            </div>
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
								Become a Volunteer				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="volunteer.php"> Become a Volunteer</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start calltoaction Area -->
			<section class="calltoaction-area section-gap relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">					
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="text-white">Want to help? Become a Volunteer</h1>
								<form action="volunteer.php" method="post">			
						  		<form class="col-lg-9">
					  	  		<div class="form-group">  
		        					<input class="form-control" placeholder="Name" name="nama_vol" type="text" autofocus> 
		      					</div> 
		      					<div class="form-group">  
	        						<input class="form-control" placeholder="Phone Number" name="phone" type="text" autofocus> 
	     						 </div> 
	     						 <div class="form-group">  
	        						<input class="form-control" placeholder="Address" name="address" type="text" autofocus> 
	      						</div> 
						  		<div class="form-row">
				  					<div class="col-6 mb-30">
						  				<input class="form-control" placeholder="Email" name="email" type="text" autofocus> 
      								</div> 
     							 </div>
     							 <div class="form-row">
     							 <div class="col-6 mb-30">
     							 	<label for="type">Animal</label>
							  		<select class="form-control" name="animal" placeholder="Select Animal">
                    				<option data-display="Select Animal">Select Animal</option>
									<option value="Cat">Cat</option>
				                    <option value="Dog">Dog</option>
				                  	</select>
				                  </div>
				            	  <div class="col-6 mb-30">
									<label for="type">Animal type</label>
						  			<select class="form-control" name="animal_type" placeholder="Select Animal">
                    				<option data-display="Select Animal">Select Animal type</option>
									<option value="Cat - Persia">Cat - Persia</option>
									<option value="Cat - Angora">Cat - Angora</option>
									<option value="Cat - Abyssinian">Cat - Abyssinian</option>
									<option value="Cat - Maine coon">Cat - Maine coon</option>
									<option value="Cat - Siamese">Cat - Siamese</option>
									<option value="Dog - Maltese">Dog - Maltese</option>
									<option value="Dog - Golden Retrievers">Dog - Golden Retrievers</option>
									<option value="Dog - Beagle">Dog - Beagle</option>
									<option value="Dog - Poodle">Dog - Poodle</option>
									<option value="Dog - Siberian Husky">Dog - Siberian Husky</option>
									</select>
									</div>						  		
								</div>						  	
							</div>		
							<fieldset class="form-group">
								<label for="day">Which days you can be volunteer?</label>
				                    <div class="form-group ">
				                        <input type="date" name="date" placeholder="Tanggal" required /></p>
				                    </div>
							</fieldset>
							<div class="form-group">
		        				<textarea input class="form-control" placeholder="Note" name="note" type="text" autofocus></textarea>
		        			</div>						  
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="submit" >
		        		</form>
					  </div>
					</div>
				</div>		
			  </div>	
			</section>
			<!-- End calltoaction Area -->													
																		
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

	<?php
		$nama_vol = $_POST['nama_vol'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$animal = $_POST['animal'];
		$animal_type = $_POST['animal_type'];
		$date = date('y-m-d');
		$note = $_POST['note'];
		$conn = new mysqli ("localhost","root","","tubes_pw");
		if ($conn -> connect_error){
			die ("Koneksi database gagal : ".$conn -> connect_error);
		} else{
			$sql = "INSERT INTO volunteer (nama_vol, phone, address, email, animal, animal_type, date, note) VALUES('$nama_vol', '$phone', '$address', '$email', '$animal', '$animal_type', '$date', '$note')";
			$hasil = $conn -> query($sql);

			echo "Nama 		: $nama_vol <br>";
			echo "Phone 	: $phone <br>";
			echo "Address	: $address <br>";
			echo "Email		: $email <br>";
			echo "Animal 	: $animal <br>";
			echo "Animal Type: $animal_type <br>";
			echo "Date 		: $date <br>";
			echo "Note		: $note <br>";
			
			echo "Simpan Volunteer berhasil dilakukan";
		}
	?>


	