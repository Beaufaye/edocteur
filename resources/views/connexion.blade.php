<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.style')
</head>
<body>
    <section class="v" style="background-color: rgb(87, 87, 214);">
        <div class="container py-5 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block bg-warning">
                    <img src="assets\img\logod.png"
                      alt="login form" class="img-fluid" style="margin-top: 100px" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form class="needs-validation" novalidate>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
      
                        <div class="form-outline mb-4">
                          <label class="form-label text-primary" for="form2Example17">Nom d'utilisateur</label>
                          <input type="text" id="form2Example17" class="form-control form-control-lg" name="name" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label text-primary" for="form2Example27">Mot de passe</label>
                          <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Connectez-vous</button>
                        </div>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>