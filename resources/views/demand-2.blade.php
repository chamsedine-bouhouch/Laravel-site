@extends('template')

@section('contenu')

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a href="" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
  </ul>
</div>

</nav>

 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!-- /FORM -->

<section class="ftco-section testimony-section ftco-no-pt">
  <div class="container mt-3">
    <div class="row ftco-animate">


 <div class="col-md-8 col-lg-8 col-xl-8">
  <form class="border border-solid p-5 form-shadow">
    <p class="h4 mb-4 text-center">Demander Une Intervention </p>

  <div class="form-row">
      <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Catégorie</label>
        <select name="categorie" id="categorie" class="form-control">
         <option selected value="">Électricité</option>
         <option value="">Plomberie</option>
         <option value="">Climatisation</option>
         <option value="">Chauffage</option>
         <option value="">Autre</option>
       </select>
  </div>
 </div> 
 <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Type</label>
        <select name="categorie" id="categorie" class="form-control">
         <option selectd value="">Dépannage</option>
         <option value="">Installation</option>
       </select>
  </div>
 </div> 
 <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Quel est votre besoin ?</label>
        <select name="categorie" id="categorie" class="form-control">
         <option value="">Choisir</option>
         <option value="">Électricité</option>
         <option value="">Plomberie</option>
         <option value="">Climatisation</option>
         <option value="">Chauffage</option>s
         <option value="">Autre</option>
       </select>
  </div>
 </div> 




 
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Adresse complète</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
     <div class="col-md-3 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Region</label>
        <select name="categorie" id="categorie" class="form-control">
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
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>





          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="heading-section ftco-animate">
              <span class="subheading">Services</span>
              <h2 class="mb-4">Experience Great Services</h2>
            </div>
            <div class="services-flow">
              <div class="services-2 p-4 d-flex ftco-animate">
                <div class="icon">
                  <span class="flaticon-engineer"></span>
                </div>
                <div class="text">
                  <h3>Expert &amp; Professional</h3>
                  <p>Separated they live in. A small river named Duden flows</p>
                </div>
              </div>
              <div class="services-2 p-4 d-flex ftco-animate">
                <div class="icon">
                  <span class="flaticon-engineer-1"></span>
                </div>
                <div class="text">
                  <h3>High Quality Work</h3>
                  <p>Separated they live in. A small river named Duden flows</p>
                </div>
              </div>
              <div class="services-2 p-4 d-flex ftco-animate">
                <div class="icon">
                  <span class="flaticon-engineer-2"></span>
                </div>
                <div class="text">
                  <h3>24/7 Help Support</h3>
                  <p>Separated they live in. A small river named Duden flows</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection