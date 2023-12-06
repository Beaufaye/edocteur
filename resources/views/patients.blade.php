@include('layout.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('ajpatients')}}"><button type="button" class="btn btn-primary">AJOUTER UN PATIENT</button></a>
    <h1 class="text-center">LISTES DES PATIENTS</h1>
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
             <th>Nom et prenom</th>
             <th>Adresse</th>
             <th>Téléphone</th>
             <th>Sexe</th>
             <th>Actions</th>
         </tr>
        </thead>

        <tbody>
          @foreach($patients as $patients)
        <tr>
            <th>{{ $patients->id}}</th>
            <td>{{ $patients->nom_prenom}}</td>
            <td>{{ $patients->adresse}}</td>
            <td>{{ $patients->telephone}}</td>
            <td>{{ $patients->sexe}}</td>
            
            <td>
              <a href="{{route('mod_patients', $patients->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a>
              <a href="{{url('delpatients/' .$patients->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
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