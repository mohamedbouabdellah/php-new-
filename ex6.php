<?php
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['motdepasse'], $_POST['confirmation'], $_POST['age'], $_POST['sexe'])) {
    exit('Veuillez remplir les champs obligatoires.');
}

if ($_POST['motdepasse'] != $_POST['confirmation']) {
    exit('Les mots de passe ne sont pas identiques.');
}

$loisirs = '';
if (isset($_POST['loisirs'])) {
    foreach ($_POST['loisirs'] as $loisir) {
        $loisirs .= $loisir . ' ';
    }
}

$couleurs = '';
if (isset($_POST['couleurs'])) {
    foreach ($_POST['couleurs'] as $couleur) {
        $couleurs .= $couleur . ' ';
    }
}
$cryptage = hash('sha256', $_POST['motdepasse']);
$date = date('d/m/y H:i:s');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Résultat inscription</title>
</head>
<body>
    <table border="1">
        <tr><td>Nom</td><td><?php echo  ($_POST['nom']); ?></td></tr>
        <tr><td>Prenom</td><td><?php echo $_POST['prenom']; ?></td></tr>
        <tr><td>Mot de Passe</td><td>********</td></tr>
        <tr><td>Cryptage</td><td><?php echo $cryptage; ?></td></tr>
        <tr><td>Age</td><td><?php echo $_POST['age']; ?></td></tr>
        <tr><td>Votre sexe</td><td><?php echo $_POST['sexe']; ?></td></tr>
        <tr><td>Langue</td><td><?php echo $_POST['langue'] ?? ''; ?></td></tr>
        <tr><td>Loisirs</td><td><?php echo $loisirs; ?></td></tr>
        <tr><td>Couleurs</td><td><?php echo $couleurs; ?></td></tr>
        <tr><td>Commentaires</td><td><?php echo $_POST['commentaires'] ?? ''; ?></td></tr>
        <tr><td>date</td><td><?php echo $date; ?></td></tr>
    </table>
</body>
</html>
