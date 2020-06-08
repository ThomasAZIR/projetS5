<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>
        Se connecter
    </title>
    <?php

    include "connexion.php";
    $identifiantErr = $passwordErr = "";
    $identifiant = $password = "";
    $testIdentifiant = $testPassword = false;

    $statut = $_GET['statut'];
    echo $statut;

    //bouton pour se connecter
    if (!empty($_POST["btn"])) {

        //On verifie que les champs sont remplis correctement sinon avertissement
        if (empty($_POST["ide"])) {
            $identifiantErr = "Champ obligatoire";
        } else {
            $identifiant = $_POST["ide"]; // erreur ?
            $testIdentifiant = true;
        }
        if (empty($_POST["pass"])) {
            $passwordErr = "Champ obligatoire";
        } else {
            $password = $_POST["pass"];
            $testPassword = true;
        }

        //si Les champs sont remplis, on fait une requète pour recupere les coordonnées de l'utilisateur

        //producteur

        if ($statut == "Producteur") {
            if ($testIdentifiant && $testPassword) {
                $testExist = $objPdo->prepare('SELECT * FROM Producteur WHERE mail_prod = ?');
                $testExist->bindValue(1, utf8_decode($identifiant));
                $testExist->execute();

                $resIdentifiant = NULL;

                while ($row = $testExist->fetch()) {
                    $resIdentifiant = $row["id_prod"];
                    $resNom = utf8_encode($row["nom_prod"]);
                    $resPrenom = utf8_encode($row["prenom_prod"]);
                    $resAdd = utf8_encode($row["adresse_prod"]);
                    $resEmail = utf8_encode($row["mail_prod"]);
                    $resMdp = utf8_encode($row["mdp_prod"]);
                }
                $testExist->closeCursor();
//            var_dump($resIdentifiant);
//            var_dump($resMdp);
//            var_dump($password);
//            var_dump($resEmail);

                //Si la requete marche pas c'est que l'identifiant est invalide ! donc on l'affiche, sinon on créé la session si le mdp est valide
                if ($resIdentifiant == NULL) {
                    $identifiantErr = "Identifiant invalide";
                } else {
                    if ($resMdp == $password) {
                        $_SESSION['logged'] = true;
                        $_SESSION['motDePasse'] = $resMdp;
                        $_SESSION["email"] = $resEmail;
                        $_SESSION["id_prod"] = $resIdentifiant;
                        $_SESSION["nom"] = $resNom;
                        $_SESSION["prenom"] = $resPrenom;
                        $_SESSION["statut"] = $statut;

                        header('location:index.php');
                    } else {
                        $passwordErr = "Mot de passe invalide";
                    }
                }
            }
        }


        //Client
        if ($statut == "Client") {
            if ($testIdentifiant && $testPassword) {
                $testExist = $objPdo->prepare('SELECT * FROM Client WHERE mail_client = ?');
                $testExist->bindValue(1, utf8_decode($identifiant));
                $testExist->execute();

                $resIdentifiant = NULL;

                while ($row = $testExist->fetch()) {
                    $resIdentifiant = $row["id_client"];
                    $resNom = utf8_encode($row["nom_client"]);
                    $resPrenom = utf8_encode($row["prenom_client"]);
                    $resAdd = utf8_encode($row["adresse_client"]);
                    $resEmail = utf8_encode($row["mail_client"]);
                    $resMdp = utf8_encode($row["mdp_client"]);
                }
                $testExist->closeCursor();
//                var_dump($resIdentifiant);
//                var_dump($password);

                //Si la requete marche pas c'est que l'identifiant est invalide ! donc on l'affiche, sinon on créé la session si le mdp est valide
                if ($resIdentifiant == NULL) {
                    $identifiantErr = "Identifiant invalide";
                } else {
                    if ($resMdp == $password) {
                        $_SESSION['logged'] = true;
                        $_SESSION['motDePasse'] = $resMdp;
                        $_SESSION["email"] = $resEmail;
                        $_SESSION["id_client"] = $resIdentifiant;
                        $_SESSION["nom"] = $resNom;
                        $_SESSION["prenom"] = $resPrenom;
                        $_SESSION["statut"] = $statut;
                        header('location:index.php');
                    } else {
                        $passwordErr = "Mot de passe invalide";
                    }
                }
            }
        }
    }
    ?>
</head>

<body class="body">
<h2 class="bleu">Connexion</h2>
<form id=formConnexion method="post">
    <br/>
    <div class="boite">
        <p>Identifiant : <input type="text" name="ide" size="18"
                                value="<?php echo isset($_POST['ide']) ? $_POST['ide'] : '' ?>"><br><span
                    class="error"> <?php echo $identifiantErr; ?></span></p>

        <p>Mot de passe : <input type="password" name="pass" size="18"
                                 value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>"><br><span
                    class="error"> <?php echo $passwordErr; ?></span></p>

        <input type="submit" value="Connexion" name="btn">
        <input type="button" value="Accueil" onclick="window.location.href='index.php';"/>
        <input type="button" value="Inscription" onclick="window.location.href='inscription.php';"/>
    </div>
</form>
</body>
</html>
