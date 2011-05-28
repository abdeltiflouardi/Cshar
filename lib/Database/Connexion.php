<?php
define("HOST","localhost");
define("BASE","pfe");
define("USER","root");
define("PASS","");
try{
$bdd=new PDO('mysql:host='.HOST.';dbname='.BASE.'',''.USER.'',''.PASS.'');
}catch(PDOException $e){echo "erreur de connexion";}
?>