@include('layout.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('ajrendezvous')}}"><button type="button" class="btn btn-primary">PROGRAMMER UN RENDEZ-VOUS</button></a>
    <h1 class="text-center">LISTES DES RENDEZ-VOUS</h1>
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
             <th>Téléphone</th>
             <th>Service</th>
             <th>Date</th>
             <th>Heure</th>
             <th>Mal</th>
             <th>Actions</th>
         </tr>
        </thead>

        <tbody>
          @foreach($rendezvous as $rendezvous)
        <tr>
            <th>{{ $rendezvous->id}}</th>
            <td>{{ $rendezvous->nom}}</td>
            <td>{{ $rendezvous->prenom}}</td>
            <td>{{ $rendezvous->telephone}}</td>
            <td>{{ $rendezvous->service}}</td>
            <td>{{ $rendezvous->date}}</td>
            <td>{{ $rendezvous->heure}}</td>
            <td>{{ $rendezvous->message}}</td>
            <td>
              <a href="{{route('mod_rendezvous', $rendezvous->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a>
              <a href="{{url('delrendezvous/' .$rendezvous->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
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