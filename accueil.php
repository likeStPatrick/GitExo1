<?php
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
echo"Bonjour $prenom $nom";
?>
<?php
$login=$_POST["login"];
$mdp=$_POST["mdp"];

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if ($login=="admin" && $mdp=="azerty"){
    header('http://$host$uri/profil.html');
}else{
    header('http://$host$uri/index.html');
}
?>
