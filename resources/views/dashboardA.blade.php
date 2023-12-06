<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>

    @include('layout.header')
    <main id="main" class="main">
        @include('layout.menu')
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card text-white mb-4">
                  <h5 class="card-title">Docteurs</h5>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h1> 8 </h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card text-white mb-4">
                <h5 class="card-title">Patients</h5>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                     <h1>148</h1>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card text-white mb-4">
              <h5 class="card-title">Rendez-vous</h5>
                <div class="card-footer d-flex align-items-center justify-content-between">
                   <h1>13</h1>
                </div>
            </div>
        </div>
        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('layout.footer')
    @include('layout.js')

</body>

</html>
