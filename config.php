<?php
    
     $con = mysqli_connect('localhost', 'root', '', 'registrations');
     

     if($con === false){
        die("ERREUR : Impossible de se connecter. ".mysqli_connect_error());
     }
?>