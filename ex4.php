<?php
$vendeur = $_POST['vendeur'];
$produit = $_POST['produit'];
$nombre = (int) $_POST['nombre'];
$manquants = [];

if ( $nombre == '') {
    $manquants[] = 'nombre de produits';
}

if ($vendeur == '') {
    $manquants[] = 'nom du vendeur';
}

if ($produit == '') {
    $manquants[] = 'nom du produit';
}


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Vérification de la commande</title>
</head>
<body>
    <fieldset style="width: 300px">
        <?php if (count($manquants) > 0): ?>
            <p>Les champs suivants n'ont pas été saisis :</p>
            <?php foreach ($manquants as $champ): ?>
                <p><?php echo $champ; ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Vous avez commandé <?php echo (int) $nombre; ?> <?php echo $produit; ?> auprès du vendeur <?php echo $vendeur; ?>.</p>
        <?php endif; ?>
        <a href="ex4.html"><button type="button">Retour</button></a>
    </fieldset>
</body>
</html>
