<?php
// Initialiser la session
session_start();
 if(!isset($_SESSION["username"])){ header("Location: login.php");
 exit(); }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<aside class="sucess">
<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
<p>C'est votre tableau de bord.</p>
<a href="logout.php">Déconnexion</a>
 </aside>
</body>
</html>