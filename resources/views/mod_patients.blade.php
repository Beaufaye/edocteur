@include('layout.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">MODIFIER D'UN PATIENT</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('uppatientst')}}" method="POST" class="form-group">
        @csrf
        
        <input type="text" name="id" style="display: none;" value="{{ $patients->id }}">

        <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Nom & Prénom</label>
            <div class="col-sm-10">
              <input type="text" name="nom_prenom" class="form-control" value="{{ $patients->nom_prenom }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
            <div class="col-sm-10">
              <input type="text" name="adresse" class="form-control" value="{{ $patients->adresse }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="telephone" class="col-sm-2 col-form-label">Téléphone</label>
            <div class="col-sm-10">
              <input type="number" name="telephone" class="form-control" value="{{ $patients->telephone }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
            <div class="col-sm-10">
                <select class="form-select" name="sexe" aria-label="Default select example" value="{{ $patients->sexe }}" required>
                    <option selected>Quel est votre sexe</option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">MODIFIER</button>
         
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