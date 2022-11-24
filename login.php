
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        small{
            display: none;
        }
        span:first-of-type{
            text-decoration: underline;
            position: relative;
            left: 154px;
            top: -33px;
            font-size: small;
            display: block;
        }
        span:last-of-type{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <form action="login.php" method="POST" style="margin-left: 20%;" id="form">
        <br><br><br><br>
        <div class="email w-25">
            <input type="email" class="form-control" name="email" onfocus="checkEmail()">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <br><br>
        <div class="password w-25">
             <input type="password" name="password" class="form-control" onfocus="checkEmail()" onkeydown="checkPassword()"><span onclick="showPassword(this)">show</span><span onclick="hidePassword(this)">hide</span>
             <small id="passwordHelp" class="form-text text-muted"></small>
        </div>
        <br><br>
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </form>


    <script src="./js/log.js"></script>

</body>
</html> -->

<?php

     include_once 'connect.php';

     function loginCheck () {
          $qu = Database::getAdminLogin("SELECT * FROM admin"); 
          return $qu;
     }
     
     if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (!empty($email) && !empty($password)) {
            $data = loginCheck()->fetch();   
            $adminEmail = $data['email'];
            $adminPassword = $data['passwords'];
            if ($email == $adminEmail && $password == $adminPassword) {
                 echo 'login succefly';
            }else{
                echo 'Email or Password not valid';
            }
        }else{
            echo "Input fileds can't be empty";
        }
     }


?>