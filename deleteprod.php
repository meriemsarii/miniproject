<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Vérifier si l'ID du produit à supprimer a été transmis via POST ou GET
if (isset($_POST['id'])) {
    $id = $_POST['id'];
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Si aucun ID n'est fourni, afficher un message d'erreur
    echo "ID du produit non spécifié.";
    exit();
}

// Préparer la requête SQL de suppression
$sql = "DELETE FROM produits WHERE id = $id";

// Exécuter la requête et vérifier si la suppression a réussi
if ($conn->query($sql) === TRUE) {
    echo "Produit supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du produit : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
