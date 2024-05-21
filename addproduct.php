<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Vérifier si des données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO produits (nom, description, prix) VALUES ('$nom', '$description', '$prix')";

    // Exécuter la requête et vérifier si l'insertion a réussi
    if ($conn->query($sql) === TRUE) {
        echo "Nouveau produit ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du produit : " . $conn->error;
    }
} else {
    echo "Les données du formulaire n'ont pas été reçues.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
