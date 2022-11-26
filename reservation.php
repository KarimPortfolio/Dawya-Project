<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <title>Dawya Nature | Réservation</title>
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
        <script src="js/jQuery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css"> 
      </head>
</head>
<body>

   <!-- ================= Header & nav ==============-->

    <header>
        <nav class="reser_navbar">
                <a href="index.html" class="pl-3 pl-md-5" data-aos="fade-right"  data-aos-duration="1700"  data-aos-delay="2700"><img src="images/DawyaLogo.png" alt=""></a>
                <div class="backhome pr-3 pr-md-5">
                    <a href="index.html" data-aos="fade-left"  data-aos-duration="1700"  data-aos-delay="2700">Reteur <span>à L'accueil</span> <i class="fa-solid fa-arrow-right-long arrow_right"></i></a>
                </div>
        </nav>
    </header>

    <!-- ================= Header & nav End ==============-->


    <!-- ================= Section ==============-->

     <section>

        
             <div class="welcome_title d-flex justify-content-center flex-column align-items-center">
                  <h1 class="text-center" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="2900">Bienvenue à Dawya Natures <i class="fas fa-leaf"></i></h1>
                  <p class="text-center mt-2" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="2950">Compléter les 3 parties de réservation</p>
             </div>

             <!-- <div class="background_heading">

             </div> -->
             <div>
                  <?php
                       if (!empty($_SESSION['checkreservation'])) {
                           echo $_SESSION['checkreservation'];
                       }else{
                           echo '';
                       }
                  ?>
             </div>

             <div class="row w-100 justify-content-center mx-0 mb-5 mt-sm-5 mt-lg-0 pb-5" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="3100">
                <div class="reservation_part1 shadow d-flex justify-content-center flex-column align-items-center col-md-1 mt-5" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="3300">
                    <div class="m-5">
                        <span class="span1 span_active"></span>
                    </div>
                    <div class="m-5">
                        <span class="span2 span_desactiver"></span>
                    </div>
                    <div class="m-5">
                        <span class="span3 span_desactiver"></span>
                    </div>
                </div>
                
                  <form action="reservationmail.php" method="post" class="reservation_part2_a shadow col-md-9 col-lg-7 m-0 ml-md-5 mt-md-5" data-aos="fade-up"  data-aos-duration="1700"  data-aos-delay="3300" id="reservation_form">
                        
                               <div class="reservation_first_part">
                                   <p>Partie 1</p>
                                   <div class="row">
                                       <div class="col-12 col-sm-6">
                                         <input type="text" class="form-control" name="nom" placeholder="Nom">
                                       </div>
                                       <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                                         <input type="text" class="form-control" name="prenom" placeholder="Prénom" >
                                       </div>
                                   </div>
                                   
                                   
                                   <div class="row mt-5">
                                       <div class="col-12 col-sm-6">
                                         <input type="number" class="form-control" name="age" placeholder="Age">
                                       </div>
                                       <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                                         <input type="email" class="form-control" name="email" placeholder="Email">
                                       </div>
                                   </div>
                                   <div class="row mt-5">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control" name="pays" placeholder="Pays">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                                            <input type="text" class="form-control" name="ville" placeholder="Ville">
                                        </div>
                                   </div>
                                         
                                   <div class="d-none d-md-flex mt-5 justify-content-center">
                                       <button type="button" class="first_btn btn btn-success">Suivant</button>
                                   </div>
                               </div>
       
                               <!-- ========= Reservation part2 ========-->
       
                               <div class="reservation_second_part mt-5 mt-md-0">
                                   <p>Partie 2</p>
                                   <div class="">
                                       <select name="les_personnes" id="" class="form-control">
                                           <option class="selected" value="personne">Les personnes</option>
                                           <option value="Famille">Famille</option>
                                           <option value="Amis">Amis</option>
                                           <option value="Groupe Entreprise">Groupe Entreprise</option>
                                       </select>
                                   </div>
                                   
                 
                                   <div class="row mt-5">
                                       <div class="col">
                                         <input type="number" class="form-control" name="nombre_des_places" placeholder="Nombre de personnes">
                                       </div>
                                   </div>
                                         
                                   <div class="mt-5">
                                       <select name="offres" id="" class="form-control">
                                            <option class="selected" value="Ateliers">L'offre vous préfére</option>
                                            <option value="Ateliers">Ateliers</option>
                                            <option value="Stages">Stages</option>
                                       </select>
                                   </div>
                                   <div class="mt-5 d-none d-md-flex  justify-content-center">
                                       <button type="button" class="second_btn btn btn-success">Suivant</button>
                                   </div>
                               </div>
       
                               <!--================ Reservation part3 ==================-->
                              
                               <div class="reservation_thired_part mt-5 mt-md-0">
                                   <p>Partie 3</p>
                                   <div>
                                       <div >
                                          <input type="date" name="date" class="form-control" >
                                       </div>
                                   </div>
                                   
                                   
                                   <div class="mt-5">
                                       <label class="d-block d-sm-inline-block" for="">Repas Jbala sur place déjeuner ou diner:</label>
                                       <input type="checkbox" name="repas" value="oui" class="ml-4"><label class="ml-2" for="">Oui</label>
                                       <input type="checkbox" name="repas" value="non" class="ml-4"><label class="ml-2" for="">Non</label>
                                  </div>

                                   <div class="mt-3">
                                        <textarea name="souhaits_particuliers" class="form-control" rows="3" placeholder="Souhaits particuliers"></textarea>
                                   </div>
                                         
                                   
                                   <div class="mt-5 d-flex justify-content-center">
                                       <button type="submit" class="btn btn-success">Réserver</button>
                                   </div>
                               </div>

                    </form>
                
             </div>

             
        

     </section>

    <!-- ================= Section End ==============-->


    <!--============ JS scripts =============-->
    
    <script src="./js/anime.min.js"></script>
    <script type="module" src="./js/reservation.js"></script>

    <!-- AOS Library JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOS Library ON -->
    <script>
      AOS.init();
    </script>

    <!--============ JS scripts End=============-->
    
</body>
</html>