@include('layout.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('ajdocteurs')}}"><button type="button" class="btn btn-primary">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES DOCTEURS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>
        @if (session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
        <thead>
         <tr>
             <th>ID</th>
             <th>Nom</th>
             <th>Prénom</th>
             <th>Fonction</th>
             <th>Sexe</th>
             <th>Actions</th>
         </tr>
        </thead>

        <tbody>
          @foreach($docteurs as $docteurs)
        <tr>
            <th>{{ $docteurs->id}}</th>
            <td>{{ $docteurs->nom}}</td>
            <td>{{ $docteurs->prenom}}</td>
            <td>{{ $docteurs->fonction}}</td>
            <td>{{ $docteurs->sexe}}</td>
            
            <td>
              <a href="{{route('mod_docteurs', $docteurs->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a>
              <a href="{{url('deldocteurs/' .$docteurs->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
            </td>
        </tr>
        @endforeach
      </tbody>
     </table>



    </div>
  </section>

</main><!-- End #main -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>

@include('layout.footer')