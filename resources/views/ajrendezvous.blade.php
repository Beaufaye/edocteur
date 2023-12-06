@include('layout.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">PROGRAMMATION D'UN RENDEZ-VOUS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('rendezvoust')}}" method="POST" class="form-group">
        @csrf
        
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
              <input type="text" name="nom" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
              <input type="text" name="prenom" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Téléphone</label>
            <div class="col-sm-10">
              <input type="number" name="telephone" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Service</label>
            <div class="col-sm-10">
              <input type="text" name="service" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
              <input type="date" name="date" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Heure</label>
            <div class="col-sm-10">
              <input type="time" name="heure" class="form-control" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Décrivez votre mal" name="message" rows="10" required></textarea>
            </div>
          </div>
         
          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href=""><button type="button" class="btn btn-danger">VOIR LA LISTE DES RENDEZ-VOUS</button></a>
      </form>



    </div>
  </section>

</main><!-- End #main -->

<br>
<br>
<br>
<br>
<br>
@include('layout.footer')