<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AllooService</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <!-- Header include -->
   <?php 
   include("includes/header.php"); 
   ?>

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item "><a href="../" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item active"><a href="../services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="../about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="../projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="../blog" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="../contact" class="nav-link">Contact</a></li>
  </ul>
</div>
 
</nav>
<!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../blog.php">Services <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$service->titre}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
         
         
          
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold text-center">Demandez une intervention en <span style="color:blue;">{{$service->categorie}}</span></h3>
               
                  

               
                <form action="#" class="p-5 bg-light">
                   <div class="form-row">
                    <div class="col-md-4 mb-3">

                  <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
                         <label for="name">Catégorie *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="categorie" id="categorie" class="custom-select">
         <option value="">Choisir la catégorie</option>


         <option @if($service->categorie == "electricite") selected = "selected" @endif value="electricite">Électricité</option>
         <option @if($service->categorie == "plomberie") selected = "selected" @endif value="plomberie">Plomberie</option>
         <option @if($service->categorie == "climatisation") selected = "selected" @endif value="climatisation">Climatisation</option>
         <option @if($service->categorie == "chauffage") selected = "selected" @endif value="chauffage">Chauffage</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div>
 </div> 

 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Type *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="preference" id="preference" class="custom-select">
         <option value="">Choisir un type</option>
         <option @if($service->type == "installation") selected = "selected" @endif value="installation">Installation</option>
         <option @if($service->type == "depannage") selected = "selected" @endif value="depannage">Dépannage</option>
      
       </select>
     </div>
   </div>
 </div> 
</div>
 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Service *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="intervention" id="intervention" class="custom-select">
         <option value="">Choisir l'intervention</option>

         @foreach ($similarServices as $similarService) {
         <option value=""> {{$similarService->titre}}</option>

        }
         @endforeach
       




       </select>
     </div>
   </div>
 </div> 
</div>
</div>

<div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>

     <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Region *</label>
        <select name="categorie" id="categorie" class="custom-select">
         <option value="">Ariana</option>
         <option value="">Ben Arous</option>
         <option value="">Bardo</option>
         <option value="">Manar</option>
         <option value="">Manazah</option>
         <option value="">Marsa</option>
         <option value="">Mourouj</option>
         <option value="">Les berges du lac</option>
         <option value="">Lafayette</option>
         <option value="">centre urban </option>
         <option value="">Manouba</option>
         <option value="">Tunis</option>
       </select>
  </div>
 </div> 
 </div>
 <div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="date" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>
   <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">L'heure *</label>
        <select name="categorie" id="categorie" class="custom-select">
         <option value="">8h à 9h30</option>
         <option value="">9h30 à 11h</option>
         <option value="">11h à 12h30</option>
         <option value="">12h30 à 14h</option>
         <option value="">14h à 15h30</option>
         <option value="">15h30 à 17h</option>
         <option value="">17h à 18h30</option>
         <option value="">18h30 à 20h</option>
         <option value="">20h à 21h30</option>
         <option value="">21h30 à 23h</option>
         <option value="">autre</option>
       </select>
  </div>
 </div> 
</div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          <div class="col-lg-4 ftco-animate">
                 <h2 class="mb-3"># {{$service->titre}} </h2>
            <p>{{$service->description}}.</p>
            <p>
              <img src="{{ asset('img/' .$service->image)}}" alt="" class="img-fluid">
            </p>
            </div>
          </div> <!-- .col-md-8 -->


      </div>
    </section>

    <!-- Footer include -->
   <?php 
   include("includes/footer.php"); 
   ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>