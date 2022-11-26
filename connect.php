
<?php
     class Database{

         static public function connect () {
            try{
                $dba = new PDO('mysql:host=localhost;dbname=dawyawebsite' ,'root','');
                $dba->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                return $dba;
            }
            catch(PDOException $e){
                echo 'ERROR TO CONNECT'.$e->getMessage();
            }
         }

         static public function getAdminLogin($request) {
              try{
                $que = Database::connect();
                $data = $que->query($request);
                return $data;
              }
              catch (PDOException $e){
                  echo 'ERROR TO GET DATA'.$e->getMessage();
              }
         }

     }

?>