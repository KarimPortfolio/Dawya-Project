<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dawya Nature</title>
    <link rel="shortcut icon" href="images/DawyaLogo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="js/jQuery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css"> 


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style/Footer.css">
  </head>

  <body >

<!--================================= Landing Page Start ===================================-->

    <!--====================== Header Start ====================-->

    <div class="intro" id="home">
      <header>
          <!--==================================== Navbar =================================-->
   
           <nav class="navLight stroke">
              
               <a href="#" class="logo pl-5 pt-1" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="10"><img src="images/DawyaLogo.png" alt="" ></a>
       
               <div class="hamburger__menu">
                    <span id="first__one"></span>
                    <span id="middle__one"></span>
                    <span id="last__one"></span>
               </div>
                 
               <div class="navbar-collaps mr-5" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-delay="10">
                    
                    <ul class="navbar-navs ml-auto my-0">
                        <li class="navbar-items">
                            <a href="#home" class="navLinks" data-aos="fade-up">Accueil</a>
                        </li>
                        <li class="navbar-items">
                            <a href="#about" class="navLinks">À propos de nous</a>
                        </li>
                        <li class="navbar-items">
                            <a href="#offres" class="navLinks">Nos offres</a>
                        </li>
                        <li class="navbar-items">
                            <a href="reservation.html" class="navLinks">Réservation</a>
                        </li>
                    </ul>

                    <!-- <ul class="flex-column d-lg-none socialMediaLinks m-0 p-0">
                        <li class="ml-0">
                             <a href="" class="d-flex  justify-content-center align-items-center"><i class="fa-brands fa-facebook"></i>Facebook</a>
                        </li>
                        <li class="ml-0">
                             <a href="" class="d-flex  justify-content-center align-items-center"><i class="fa-brands fa-instagram"></i>Instagram</a>
                        </li>
                    </ul> -->
  
               </div>
           </nav>
   
           <!--============================== Navbar END ===================================-->
   
         </header>
      </div>

      <!--==================== Header END ====================-->


      <!--==================== Section END ====================-->

     <section>

       <!--============= Page introduction ============= -->
      

        <!-- ===== Intro text =====-->

         <div class="landingPage">
             <div class="row w-100 justify-content-center pb-3">
                  <h5 class="col-12 type element text-center" data-aos="fade-up" data-aos-duration = "400" data-aos-delay= "100">Dawya Natures</h5>
                  <p class="col-sm-10 col-md-8 col-lg-4 text-center text-white mt-2 mb-3" data-aos="fade-up"  data-aos-duration="400"  data-aos-delay="800">
                     des sommets imposants, de belles prairies, des arbres pleins de vie 
                     laissez-nous ressentir la beauté de la nature, respirer de l'air frais 
                     et ressentir l'étreinte de la lumière du soleil
                  </p>
                  <!-- <p class="textintro" data-aos="drift-up" data-aos-duration = "900" data-aos-delay= "350">And I'm</p> <p class="type ml-3" data-aos="drift-up" data-aos-duration = "900" data-aos-delay= "400"></p> -->
             </div>
             <div class="row d-flex justify-content-center pb-5">
                <a class="mb-5 btn btn-success" href="reservation.php" data-aos="fade-up"  data-aos-duration="400" data-aos-easing="ease-in-sine" data-aos-delay="1000">Rejoinez-nous <i class="fas fa-long-arrow-right"></i></a>
             </div>
             <div class="controls" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="2700">
                <div class="sound_on_button"><i class="fas fa-volume-up"></i></div>
                <div class="mute_button"><i class="fas fa-volume-mute"></i></div>
                <div class="openMap"><i class="fas fa-map-marker-alt"></i></div>
             </div>
             <video src="images/dawyavideo.mp4" autoplay muted loop></video>
             <!-- ===== Website audio =====-->
             <audio autoplay loop controls class="audio">
                 <source src="audio/5 minutes of calming nature sounds (forest)🌲🌿.mp3"  type="audio/mpeg"/>
             </audio>
          
             <!-- ===== Website audio End =====-->
         </div>

        <!-- ===== Intro text end =====-->

       <!--============= Page introduction End ============= -->

      <!--=============== Google Map  ================-->
        <div class="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12861.535593567745!2d-5.430776754562435!3d35.7569972282248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b61adb890f701%3A0x195dcb1cf63db251!2z2KjZiNis2YXZitmE!5e0!3m2!1sar!2sma!4v1667638555790!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="closeIcone1"> 
              <div>
                  <span class="close"></span>
                  <span class="close"></span>
              </div>
            </div>
        </div>
      <!--=============== Google Map End  ================-->

      <!--=========== Text principal About us ===========-->

      <div class="text_principale py-4 px-0 px-lg-5" id="about">
           <div class="row w-100 px-0 px-lg-5 m-0">
                <div class="col-lg-6 mt-5 p-0 m-0 px-3 px-sm-5 px-lg-0">
                    <img src="./images/textPrincipalImg.jpeg" alt="" class="w-100 h-100" data-aos="fade-right" data-aos-duration = "900" data-aos-delay= "300">
                </div>
                <div class="col-lg-6 mt-3 mt-lg-5 p-0 m-0 d-flex justify-content-center align-items-center flex-column">
                   <h5 class="about_us_title text-center text-lg-left my-5 pl-0 pl-lg-5" data-aos="fade-up" data-aos-duration = "900" data-aos-delay= "300">À propos de <span>nous</span> </h5>
                    <div class="about_us_text px-3 px-sm-5 py-4 py-lg">
                          <div class="d-flex justify-content-center justify-content-lg-start w-100" data-aos="fade-up" data-aos-duration = "900" data-aos-delay= "400">
                            <button class="m-2 btn btn-success shadow-sm btnFra" onfocus="handlingFocus()">FRA</button>
                            <button class="m-2 btn btn-success shadow-sm btnEng" onfocus="handlingFocus()">ENG</button>
                            <button class="m-2 btn btn-success shadow-sm btnSpa" onfocus="handlingFocus()">SPA</button>
                            <button class="m-2 btn btn-success shadow-sm btnArb" onfocus="handlingFocus()">ARB</button>
                          </div>
                          <p class="text-justify mt-4 textPrincipalParagraphe" data-aos="fade-up" data-aos-duration = "900" data-aos-delay= "500"></p>
                    </div>
                </div>
           </div>
      </div>

      <!--=========== Text principal About us END  ===========-->


      <!-- ================ Our images ================-->

       <div class="galerie pt-5">
        
          <div class="galerie_title">
             <h5 class="text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "100">Notre Gallerie</h5>
          </div>

          <div class="container">
                <div class="row m-0">
                     <div class="col-12">
                         <div class="d-flex justify-content-center w-100 mt-5 filters" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "150">
                             <p class="text-center ml-4 active">TOUS</p>
                             <p class="text-center ml-5">BOUJMIL</p>
                             <p class="text-center ml-5">ATELIERS</p>
  
                         </div>
                     </div>
                     <div class="col-12">
                          <div class="row justify-content-center allGallerieImgs m-0 pt-5">
                                  <div class="col-12 col-md-6 col-lg-4 boujmilView" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "200">
                                      <img src="./images/boujmilImg.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0 boujmilView" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "200">
                                      <img src="./images/boujmilImg2.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 boujmilView mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "200">
                                      <img src="./images/boujmilImg3.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 boujmilView mt-4" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "500">
                                      <img src="./images/boujmilImg4.JPG" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 boujmilView mt-4" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "500">
                                      <img src="./images/boujmilImg5.JPG" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4 boujmilView mt-4" data-aos="fade-up" data-aos-duration = "700" data-aos-delay= "500">
                                      <img src="./images/boujmilImg6.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-3 mt-4 atelier" >
                                      <img src="./images/atelier.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-3 mt-4 atelier " >
                                      <img src="./images/atelier2.jpg" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-3 mt-4 atelier" >
                                      <img src="./images/atelier3.JPG" alt="" class="shadow">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-3 mt-4 atelier" >
                                      <img src="./images/atelier4.JPG" alt="" class="shadow">
                                  </div>
                          </div>
                     </div>
                  
                </div>
          </div>

       </div>


      <!-- ================ Our images End ================-->

      <!--===============  Nos offres  ================-->

    
    <div class="container" id="offres">
        <div  class="py-5 mt-5">
          <div class="offres_title">
              <h5 class="text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "100">Nos offres</h5>
          </div>
          <div class="row mx-0 mt-5 w-100 py-5">
              <div class="col-lg-6 order-1 order-lg-0 first_part shadow px-4 pb-2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                           <div class="my-4">
                               <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">OFFRES TOURISTIQUES UNIQUES de (RE)DECOUVERTE de la NATURE dans l’arrière pays de la côte méditerranéenne </h6>
                           </div>
                           <div class="mb-4">
                              <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">Des activités exclusivement outdoor en pleine nature, des micro-aventures avec retour vers le local et la tradition, en quête de bien-être et revitalisation des sens pour tous les publics : en couple, en famille ou entre amis… Adultes, Ados et Enfants pour une immersion totale dans la nature. 
                             </p>
                           </div>
                           <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                           </div>
                   </div>
                   <div class="carousel-item">
                           <div class="my-4">
                               <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Randonnée douce ou dynamique</h6>
                           </div>
                           <div class="mb-4">
                              <p class="text-justify" data-aos="fade-up" data-aos-duration = "400" data-aos-delay= "300">
                                Principe : Promenade guidée avec un coach sportif ou coach mental
                                Période d’action :  Février  – Novembre  - durée : 4 heures avec en option un déjeuner beldi
                                Cibles : Adultes & Adolescents
                                Animateur : Coach, guides
                                </p>
                           </div>
                           <div>
                               <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                           </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Randonnées Dawya</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300"> 
                               Principe : Promenade guidée et commentée (histoires des lieux, géologie, faune et installations land art)
                              Période d’action :  Février  – Novembre  - durée : 6 heures avec un déjeuner beldi
                              Cibles : Adultes & Adolescents
                              Animateur : Coach, guides et animateurs locaux spécialisés
                              
                            </p>
                          </div>
                          <div>
                            <a href="" class="btn btn-success" data-aos="fade-up" data-aos-duration = "400" data-aos-delay= "100">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Ateliers création land art</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                              Principe : Créations d’installation land art éphémères en montage (mandala, suspension, 
                              empilements…)	 
                              Période d’action :  Juin – Octobre - durée : 2,5 à 4 heures avec une pause ftour beldi 
                              Cibles : Adultes & Enfants
                              Animateur : Artistes ou Animateurs spécialistes land art
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Stages bien-être & énergie</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                              Principe : Ballade douce avec des étapes Médiation, Yoga du rire, Gym douce, Qi-gong ou Méditation pleine conscience
                              Période :  Mars – Novembre  - durée : 4 heures avec un ftour beldi
                              Cibles : Adulte & Adolescent 
                              Animateur : Animateur spécialisé
                              
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Observation du ciel</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                              Principe : Promenades nocturnes et observation des étoiles avec des jumelles ou un télescope.
                              Période d’action :  Février  – Novembre  - durée : 4 heures avec un ftour beldi
                              Cibles : Adulte & Enfants
                              Animateur : Animateur spécialisé

                              
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400" >Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">STAGE botanique</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                              Principe : Balade douce en montagne, présentation du site et de ces particularités et découverte et explications des plantes (comestible, tinctoriale, médicinale, agricole,  culturelle…) + remise 
                              d’un book des plantes locales et recettes de cuisine.
                              Période d’action :  Mars – Juin - durée : de 3 à 5 heures avec une pause ftour beldi
                              Cibles : Adultes & Adolescents
                              Animateur : Botaniste spécialisée 
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">Package Dawya découvertes</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                                 Principe : Promenade douce sur le sentier, découvertes botanique, rencontres avec les 
                                 paysans, Astronomie, Yoga, Gym, Méditation et Création artistique land art 
                                 Période d’action :  Mars  – Novembre 
                                 durée : 1 à 2 jours avec pauses et déjeuner beldi
                                 Cibles : Adultes, couples & Ados
                                 Animateur : Artiste land art, guide et coach spécialisés                              
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">retraite dawya bien-être</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                                  Principe : Yoga, Gym douce, Méditation en pleine conscience, Marche calme, Danse circulaire, Astronomie et Création land art 
                                  Période d’action :  Mars – Octobre -  durée : 2,5 jours avec pauses et déjeuner beldi
                                  Cibles : Adultes, couples & Ados
                                  Animateur : Coach spécialisés, Animateur land art et Guide
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                   <div class="carousel-item">
                          <div class="my-4">
                              <h6 class="offres_slide_title text-center" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "200">INCENTIVE ou TEAM BUILDING – sur devis</h6>
                          </div>
                          <div class="mb-4">
                             <p class="text-justify" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "300">
                              Principe : animation des réseaux de vente, des distributeurs ou encore de ses principaux clients avec la mise en place d’actions nature : stage de survie, bien-être, méditation, chasse au trésors, animations sportives ou autres sur mesure pour répondre aux demande des entreprise.  
                              Période d’action :  Printemps et Automne - Cibles : Clients professionnels des hôtels de Tamuda Bay                               
                            </p>
                          </div>
                          <div>
                            <a href="reservation.php" class="btn btn-success" data-aos="fade-up" data-aos-duration = "500" data-aos-delay= "400">Reserver votre place</a>
                          </div>
                   </div>
                 </div>
                 <ol class="carousel-indicators align-items-center m-0">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                </ol>
                 <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                   <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                   <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </button> -->
               </div>
                 
              </div>
              <div class="col-lg-6 p-0 w-100second_part">
                   <div class="row w-100 m-0">
                       <div class="col-6 p-0">
                         <img src="./images/atelier3.JPG" alt="" class="w-100 h-100 shadow">
                       </div>
                       <div class="col-6 pr-0 d-flex justify-content-center align-items-center flex-column">
                         <img src="./images/nosOffres.jpeg" alt=""   class="w-100 h-100 shadow">
                         <img src="./images/dawyarendenu.JPG" alt="" class="w-100 h-100 mt-3 shadow">
                       </div>
                   </div>
              </div>
          </div>
     </div>
  </div>
 

      <!--===============  Nos offres End ================-->

     </section>

    <!--===============  Footer  ================-->

    <div class="container-fluid Footer">
      <footer class="pt-4 pl-0 pl-md-5 pr-0 pr-md-5">
        <div class="row justify-content-center justify-content-md-left pl-0 pl-md-5 mb-0 mx-0">
          <div class="col-md-6 col-lg-4 mt-4 mt-md-0 test">
            <h5 class="text-center text-md-left">À propos de nous</h5>
            <ul class="nav flex-column ">
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Notre équipe</a></li>
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Clients</a></li>
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Presse</a></li>
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Bloguer</a></li>
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">FAQs</a></li>

            </ul>
          </div>

          <div class="col-md-6 col-lg-4 mt-4 mt-md-0 test">
            <h5 class="text-center text-md-left" >Formation en entreprise</h5>
            <ul class="nav flex-column ">
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Dirigeants</a></li>
              <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-center text-md-left">Termes et conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <h5 class="text-center text-md-left">Contactez-nous</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white text-center text-md-left"><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;(406) 555-0120</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white text-center text-md-left"><i class="bi bi-envelope-fill"></i>&nbsp;&nbsp;alma.lawson@example.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white text-center text-md-left"><i class="bi bi-geo-alt"></i>&nbsp;&nbsp;Boujmil mountain 50min depuis Tétouan</a></li>
            </ul>
          </div>

        </div>

        <div class="d-flex justify-content-between py-4 mt-4 border-top flex-column flex-sm-row ">
          <p id="para" class="text-center text-sm-left">&copy; Dawya Natures Tous les droits est réserve.</p>

          <ul class="list-unstyled d-flex justify-content-center justify-content-sm-left">
            <p id="para">Suivez-nous :</p>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li>
          </ul>
        </div>
      </footer>
    </div>

<!-- ================== Back to top button ================== -->
    <button
      type="button"
      class="btn btn-success shadow btn-floating btn-lg"
      id="btn-back-to-top"
      >
      <i class="fas fa-arrow-up"></i>
    </button>

    <script src="js/scriptsComponents/scroll-up.js"></script>
  
<!--===============  Footer END  ================-->
 

  
  <!-- ============ JS Scripts =============-->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS file -->
    <script type="module" src="./js/main.js"></script>
    <!-- txtanime.js Library -->
     

    <!-- AOS Library JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOS Library ON -->
    <script>
       AOS.init();
    </script>
    <!-- ============ JS Scripts END =============-->
  </body>
</html>