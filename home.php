<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,intial-scale=1,shrink-to-fit=no">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<?php include 'components/css.php'; ?>
</head>
	<body>
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fas fa-bars"></i>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      
				  <li class="nav-item">
			        <a class="nav-link " href="#">Home</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link " href="#">NMAP</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link " href="#">IP SCANNER</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link " href="#">STORE</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link " href="#">CTF</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link " href="login.php">LOGIN</a>
			      </li>
			       
			      <li class="nav-item">
			        <a class="nav-link " href="signup.php">SIGNUP</a>
			      </li>
			    </ul>
			    
			  </div>
			</nav>
		</section>
		
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="promo-title">Web Based Messenger Application</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, eaque fugit tenetur eos est accusantium dicta impedit ex non quisquam.</p>
						<a href="#"><img src="assets/img/play.png" class="play-btn" >Watch Tutorials</a>
					</div>
					<div class="col-md-6 text-center">
						<img src="assets/img/teamwork.png" class="img-fluid">
					</div>
				</div>
			</div>
			<img src="assets/img/waves.jpg" class="bottom-img">
		</section>

		<section id="services">
			<div class="container text-center">
				<h1 class="title">WHAT WE DO ?</h1>
				<div class="row text-center">
					<div class="col-md-4 services">
						<img src="assets/img/conversation.png" class="service-img">
						<h4>Services</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consectetur, fuga laudantium culpa maxime illum sit sed eligendi dolorem ullam?</p>
					</div>
					<div class="col-md-4 services">
						<img src="assets/img/store.png" class="service-img">
						<h4>Store</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consectetur, fuga laudantium culpa maxime illum sit sed eligendi dolorem ullam?</p>
					</div>
					<div class="col-md-4 services">
						<img src="assets/img/web.png" class="service-img">
						<h4>Ctf</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consectetur, fuga laudantium culpa maxime illum sit sed eligendi dolorem ullam?</p>
					</div>
				</div>
			</div>
			
		</section>


	</body>
</html>