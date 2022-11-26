<?php

session_start();

function sendMAIL()
{
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $pays = $_POST['pays'];
        $ville = $_POST['ville'];
        $les_personnes = $_POST['les_personnes'];
        $nombre_des_places = $_POST['nombre_des_places'];
        $offres = $_POST['offres'];
        $date = $_POST['date'];
        $repas_jbala = $_POST['repas'];
        $souhaits_particuliers = $_POST['souhaits_particuliers'];
        $subject = 'Reservation à Dawya Nature';
        $message = "
        
           . Nom:$nom 
           . Prénom:$prenom 
           . Age:$age 
           . Email:$email
           . Pays:$pays 
           . Ville:$ville 
           . Les personnes:$les_personnes
           . Nombre des places:$nombre_des_places 
           . Offres:$offres 
           . Date:$date 
           . Repas jbala:$repas_jbala
           . Souhaits particuliers:$souhaits_particuliers
        
        ";

        $successMsg = '
           <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Reservation envoyé avec succès </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
           </div>';

        if (empty($nom) || empty($prenom) || empty($age) || empty($email) || empty($pays) || empty($ville) || empty($les_personnes) || empty($offres) || empty($date) || empty($repas_jbala) || empty($souhaits_particuliers) || empty($subject)) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Veuillez remplir tous les champs de saisie</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
             </div>';
        } else {
            if (!is_nan($nom) || !is_nan($prenom) || !is_nan($email) || !is_nan($pays) || !is_nan($ville)) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>Vos informations personnelles ne peuvent pas être un nombre seul âge peut</strong>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>';
            } else {
                $to      = 'benkarim1999@gmail.com';
                $subject = $subject;
                $message = $message;
                $headers = array(
                    'From' => $nom . ' ' . $prenom . ' ' . $email,
                    'Reply-To' => $email,
                    'X-Mailer' => 'PHP/' . phpversion()
                );
                mail($to, $subject, $message, $headers);
                echo $successMsg;
            }
        }
    } else {
        echo 'not submited';
    }
}

?>


<script>
    window.location = 'reservation.php';
</script>