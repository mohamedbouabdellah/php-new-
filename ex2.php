<?php
$champs = [
    'nom' => 'Nom',
    'prenom' => 'Prénom',
    'adresse' => 'Adresse',
    'ville' => 'Ville',
    'code' => 'Code postal'
];

$manquant = false;
foreach ($champs as $cle => $titre) {
    if (!isset($_POST[$cle]) || $_POST[$cle] == '') {
        $manquant = true;
    }
}

if ($manquant) {
    exit("Veuillez remplir tous les champs.");
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Confirmation des coordonnées</title>
</head>
<body>
    <table border="1">
        <caption><strong>Confirmation de vos coordonnées</strong></caption>
        <?php foreach ($champs as $cle => $titre): ?>
            <tr>
                <td><?php echo $titre; ?></td>
                <td><?php echo $_POST[$cle]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="ex2.html">Retour</a></p>
</body>
</html>
