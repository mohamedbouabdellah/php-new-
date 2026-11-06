<?php

$vendeur = $_POST['vendeur'];
$produit = $_POST['produit'];
$nombre = (int) $_POST['nombre'];

if (!isset($vendeur , $produit , $nombre )){
    exit("Veuillez remplir le formulaire.");
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Récapitulatif de la commande</title>
</head>
<body>
    <p>Vous avez commandé <?php echo $nombre; ?> <?php echo $produit; ?> auprès du vendeur <?php echo $vendeur; ?>.</p>
    <a href="ex3.html"><button type="button">Retour</button></a>
</body>
</html>
