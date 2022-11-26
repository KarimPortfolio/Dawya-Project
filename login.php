<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="js/jQuery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css"> 
</head>
<body>
    <div class="row vh-100">
        <div class=" col-md-6 login_part2 d-flex justify-content-center align-items-center flex-column">
            <div class="titree text-center mt-5 mb-5">
                <h2 class="text-white ">Bienvenue </h2>
            </div>
            <div class="divimg" >
                <img src="images/imgLogin.png" alt="" >
            </div>
        </div>
        <div class="col-md-6 titrelog d-flex justify-content-center align-items-center flex-column pb-5">
            <h2 class="text-center mt-5 mb-5 ">Se connecter</h2>
            <form action="login.php" method="post" class="w-75">
                <div class="form-group mb-3">
                  <input type="email" class="form-control" id="emaill" placeholder="E-mail" name="email" onkeydown="checkEmail()">
                  <small id="emailHelp" class="form-text text-muted">Email can't be empty and can't be a number</small>
                </div>
                <div class="form-group ">
                  <input type="password" class="form-control" id="Mpasse" placeholder="Mot de passe" name="password" onfocus="checkEmail()" onkeydown="checkPassword()" />
                  <small id="passwordHelp" class="form-text text-muted">Password can't be empty and can't be a number</small>
                </div>
                <div class="passwordVisibility d-flex justify-content-end pr-3">
                    <i class="fas fa-eye showIcon" onclick="showPassword(this)" ></i>
                    <i class="fas fa-eye-slash hideIcon" onclick="hidePassword(this)"></i>
                </div>
                <div>
                      <?php
                        //    if (!empty(checkEmailandPassword())) {
                        //        checkEmailandPassword();
                        //    }else{
                        //        echo '';
                        //    }
                      ?>
                </div>
                <div class="btnnlog">
                    <button type="submit" name="submit" class=" form-control form-control-lg shadow-sm " >Connexion</button>
                </div>
              </form>
        </div>
 
    </div>

    <script src="./js/log.js"></script>

</body>
</html>


<?php

include_once 'connect.php';

function loginCheck()
{
    $qu = Database::getAdminLogin("SELECT * FROM admin");
    return $qu;
}

function checkEmailandPassword () {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if (!empty($email) && !empty($password)) {
            $data = loginCheck()->fetch();
            $adminEmail = $data['email'];
            $adminPassword = $data['passwords'];
            if ($email == $adminEmail && $password == $adminPassword) {
                echo 'Connecter avec success';
            } else {
                echo 'Email ou mot de passe invalide';
            }
        } else {
            echo " Remplit tous les champs ";
        }
    }else{
        echo 'error';
    }
}




?>