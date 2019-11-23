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

  <section class="ftco-section ftco-no-pt ftco-margin-top">
 <div class="container">
  <div class="row">

<div class="col-md-6">
    <div class="request-quote">
     <div class="bg-primary py-4">
      <span class="subheading">Vous êtes un Professionnel</span>
      <h3>Rejoignez AllooService</h3>
    </div>

    
              {!! Form::open(['route' => 'storePost']) !!}







<div class="form-row align-items-center">
    <div class="col-auto">
    	
      {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => ' Nom']) !!}
    </div>

    <div class="col-auto">
      {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => ' Prenom']) !!}
    </div>   
 </div>


    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}"">
     <div class="form-field">
       <div class="select-wrap">

        <select name="categorie" id="categorie" class="custom-select">
         <option value="">Catégorie de l</option>
         <option value="">Électricité</option>
         <option value="">Plomberie</option>
         <option value="">Climatisation</option>
         <option value="">Chauffage</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div> 

    <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}"">
     <div class="form-field">
       <div class="select-wrap">

        <select name="service" id="service" class="form-control">
         <option value="">Choisir votre Service</option>
         <option value="">Électricité</option>
         <option value="">Plomberie</option>
         <option value="">Climatisation</option>
         <option value="">Chauffage</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div> 


  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}"">
     <div class="form-field">
       <div class="select-wrap">

        <select name="preference" id="preference" class="form-control">
         <option value="">Choisir l'horaire</option>
         <option value="">la matinée</option>
         <option value="">L'après midi</option>
         <option value="">le soir</option>
         <option value="">les week-ends</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div> 




	

                  <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
      {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => ' Nom']) !!}
      {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
      {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => ' Prenom']) !!}
      {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
    </div>   
    <div class="form-group {!! $errors->has('numero') ? 'has-error' : '' !!}">
      {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => ' Numéro']) !!}
      {!! $errors->first('numero', '<small class="help-block">:message</small>') !!}
    </div>

    <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
      {!! Form::text('service', null, ['class' => 'form-control', 'placeholder' => ' Service']) !!}
      {!! $errors->first('service', '<small class="help-block">:message</small>') !!}
    </div>


   

  <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
    {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
    {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
  </div >
              {!! Form::submit('Postuler', ['class' => 'btn btn-info pull-right']) !!}
              {!! Form::close() !!}

</div>      
</div>
</div>
</div>
</section>
@endsection