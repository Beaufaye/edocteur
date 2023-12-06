<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
<div class="row col-lg-12">
    <div class="d-flex align-items-center justify-content-between col-lg-8">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">EDoctor</span>
      </a>
      
    </div><!-- End Logo -->

  <div class="col-lg-4">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a href=""><button type="submit" class="btn btn-danger">
        {{ __('Déconnexion') }}
    </button></a>
  </form>
  </div>
</div>
  </header><!-- End Header -->
