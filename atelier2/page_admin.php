<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur possède un cookie valide et que le jeton correspond à la session
if (!isset($_COOKIE['authToken']) || !isset($_SESSION['authToken']) || $_COOKIE['authToken'] !== $_SESSION['authToken']) {
    header('Location: index.php'); // Redirection vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Administrateur</title>
</head>
<body>
    <h1>Bienvenue sur la page Administrateur protégée par un Cookie</h1>
    <p>Vous êtes connecté en tant qu'admin.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
