<!DOCTYPE html>
<html lang="fr">

<head>
  @include('layouts.style')
</head>

<body>

  @include('layouts.header')
  
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

    <div class="container mb-9">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Votre Santé, Notre Priorité</h1>
          <h2>Bienvenu chez EDoctor, votre expert en soins médicaux</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Commencer</a>
            <a href="https://www.youtube.com/watch?v=rqYcQpONzt8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Regardez la Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/msf.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/oms.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/msf.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/oms.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/msf.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/oms.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A Propos de nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Chez eDocteur, nous sommes passionnés par la santé et nous croyons en l'accès facile aux soins médicaux..
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Expertise médicale </li>
              <li><i class="ri-check-double-line"></i> Accessibilité </li>
              <li><i class="ri-check-double-line"></i> Réactivité </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Notre équipe d'experts est là pour vous offrir des consultations en ligne de qualité, où que vous soyez. <br> 
              Nous nous engageons à vous fournir des solutions médicales pratiques, sécurisées et personnalisées. Faites confiance à eDocteur pour prendre soin de vous, à tout moment, en tout lieu.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Votre Allié Santé <strong>Toujours là pour vous simplifier la vie</strong></h3>
              <p>
                Edoctor vous offre de nombreux avantages:
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Accessibilité <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Avec EDoctor, vous pouvez consulter un médecin à distance, peu importe où vous vous trouvez. Cela vous permet d'obtenir des soins médicaux sans avoir à te déplacer.  
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Gain de temps <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Grace à EDoctor, vous pouvez éviter les longues attentes dans les salles d'attente des cabinets médicaux. Vous pouvez prendre rendez-vous en ligne et consulter un médecin à l'heure qui vous convient.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Suivi médical <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     EDoctor vous permet de bénéficier d'un suivi médical régulier. Vous pouvez communiquer avec votre médecin, lui poser des questions et recevoir des conseils, meme après la consultation initiale.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Les activités cliniques comprennent les soins directement liés au patient, considérées comme le cœur des pratiques professionnelles, et les soins indirectement liés au patient.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-prescription2"></i></i></div>
              <h4><a href="">Services infimiers de base</a></h4>
              <p>Les soins infirmiers englobent les soins autonomes et collaboratifs prodigués aux individus de tous âges, aux familles, aux groupes et aux communautés, malades ou en bonne santé, indépendamment du contexte.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Médecine générale</a></h4>
              <p>La médecine générale, ou médecine familiale, est une spécialité médicale prenant
                 en charge le suivi durable, le bien-être et les soins de santé généraux primaires 
                 d'une communauté, sans se limiter à des groupes de maladies relevant d'un organe, 
                 d'un âge, ou d'un sexe particulier.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Chirurgie</a></h4>
              <p>La chirurgie est la partie de la thérapeutique qui implique des opérations internes 
                ou des manœuvres externes sur les tissus, notamment par incision et suture. 
                Un chirurgien est un professionnel de la santé habilité à pratiquer la chirurgie. 
                Un acte médical pratiqué par un chirurgien est une opération chirurgicale. </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Pédiatrie</a></h4>
              <p>La pédiatrie est une branche spécialisée de la médecine qui étudie le développement 
                neuro-sensori-moteur et physiologique normal de l'enfant, ainsi que toute la pathologie 
                qui y a trait (maladies infantiles), de la naissance à la période postpubertaire où il 
                devient adulte </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <h1 class="text-light">Vous souffrez d'un mal?</h1>
        <h5 class="text-light">Prenez un rendez-vous</h5>

        <form action="{{route('rendezvoust')}}" method="POST" class="form-group">
          @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="">
              <label class="text-light">Nom</label>
              <input type="text" name="nom" class="form-control"  required>
            </div>
            <div class="">
              <label class="text-light">Téléphone</label>
              <input type="number" class="form-control" name="telephone" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="">
              <label class="text-light">Prénom</label>
              <input type="text" name="prenom" class="form-control"  required>
            </div>
            <div class="">
              <label class="text-light">Service</label>
              <select class="form-select" name="service" aria-label="Default select example" required> 
                <option value="Masculin">Services infirmiers de base</option>
                <option value="Feminin">Médecine générale</option>
                <option value="Feminin">Chirugie</option>
                <option value="Feminin">Pédiatrie</option>
            </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="">
              <label class="text-light">Date</label>
              <input type="date" class="form-control" name="date" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="">
              <label class="text-light">Heure</label>
              <input type="time" name="heure" class="form-control"  required>
            </div>
          </div>
          <div class="col-lg-12">
            <label class="text-light">Qu'avez-vous?</label>
            <textarea class="form-control" placeholder="Décrivez votre mal" name="message" rows="10" required></textarea>
          </div>

          <div class="text-center mt-3"><button class="btn btn-warning" type="submit">Prendre un rendez-vous</button></div>
        
        </div>
      </form>


      </div>
    </section><!-- End Cta Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Notre Equipe</h2>
          <p>Edoctor est constitué de personnels très qualifiés rendant ainsi la productivité meilleure.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr Beaufaye BAOUROU</h4>
                <span>Médecin en chef</span>
                <p>Il vous prend en charge et prescrit le traitement</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mme Lauréna OBOULBIGA</h4>
                <span>Directrice des soins</span>
                <p>Elle assure la coordination et la continuité des soins</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Trésor DILLA</h4>
                <span>Infirmiers</span>
                <p>Il dispense les soins prescrits par les praticiens et surveille votre état de santé</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aicha Derra</h4>
                <span>Aide-soignante</span>
                <p>Elle travaille en étroite collaboration avec les infirmières et les agents hospitaliers</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
           </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p>9FGX+HR Ouagadougou</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>hallo@edoctor.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+226 57208623</p>
              </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3896.7300135680175!2d-1.5058789761612061!3d12.400998777133902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebfc7b803cf9b%3A0x1b6b846e46bb6421!2sClinique%20Notre%20Dame%20de%20la%20Paix%2C%20Somgand%C3%A9%2C%20Ouagadougou!5e0!3m2!1sfr!2sbf!4v1701598269861!5m2!1sfr!2sbf" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen ></iframe>
              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre nom</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">En cours</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  


  @include('layouts.footer')

  @include('layouts.js')
</body>

</html>