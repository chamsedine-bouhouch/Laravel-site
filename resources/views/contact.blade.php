<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AllooService</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <!-- Header include -->
   <?php 
   include("includes/header.php"); 
   ?>

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a href="./" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
    <li class="nav-item "><a href="about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
    <li class="nav-item "><a href="blog" class="nav-link">Blog</a></li>
    <li class="nav-item active"><a href="contact" class="nav-link">Contact</a></li>
  </ul>
</div>
</nav>
<!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contactez Nous</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
           
						{!! Form::open(['url' => 'contact']) !!}
          <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('numero') ? 'has-error' : '' !!}">
            {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => 'Votre Numéro']) !!}
            {!! $errors->first('numero', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
            {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
            {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
          </div>
          {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
        {!! Form::close() !!}
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

		<!-- Footer include -->
   <?php 
   include("includes/footer.php"); 
   ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>