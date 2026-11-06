    <?php
    $nom = $_POST["nom"] ;
    $pass = $_POST["pass"];
    if (!isset($nom) || !isset($pass)){
        exit("invalide");
    }

    if ($pass == "mot"){
        $valide= "correct" ;
    }
    else{
        $valide="incorrect";
    }

    echo "Bienvenue M." . $nom . ": votre mot de passe est " . $valide ;

    ?>
    <html>
        <a href="ex1.html"><input type="button" value="retour" ></a>
    </html>
