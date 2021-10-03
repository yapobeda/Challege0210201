<?php
require('config.php');
$user = $email = $password = $prenom = $nom = $telephone = "";
if(isset($_POST['S\'inscrire']))
{
    $user = $_POST["user"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $telephone = $_POST["telephone"];
}
 
   $req="INSERT INTO utilisateur(user, email, password, prenom, nom, telephone) VALUES ('".$user."','".$email."','".$password."','".$prenom."','".$nom."','".$telephone."')";

   $resul=mysqli_query($con,$req);
?>

