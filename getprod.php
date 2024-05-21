<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Requête pour récupérer la liste des produits
$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Créer un tableau pour stocker les produits
    $products = array();

    // Boucler à travers les résultats et ajouter les produits au tableau
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    // Convertir le tableau en format JSON et le renvoyer
    echo json_encode($products);
} else {
    // Aucun produit trouvé
    echo "Aucun produit trouvé dans la base de données.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
