<?php
// Paramètres de connexion à la base de données
$host = "localhost"; // Adresse de l'hôte
$user = "votre_utilisateur"; // Nom d'utilisateur
$password = "votre_mot_de_passe"; // Mot de passe
$database = "votre_base_de_donnees"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>
