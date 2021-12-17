<?php

//connexion à la Base De Donnée
include "lien.php";
mysqli_set_charset($bdd, 'utf8');

//Vérification du formulaire
    if(isset($_POST['valider']))
    {
//      Vérification des varible et sécurisé
    $login =  htmlspecialchars($_POST['login']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);

//        Vérification du formulaire remplie
        if(!empty($_POST['login']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
        {

//          Vérifier si les 2 mots de passe son identiques
            if($password == $password2)
            {
                $login = $_POST['login'];
                $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login' ");
//                $loginexsist = mysqli_fetch_all($_POST['login']);

// var_dump(mysqli_num_rows($requete));

                if(mysqli_num_rows($requete)){
                    echo "Le login est déja exsistent !";
                }
                else {

//              Insertion des données des uilisateurs dans la base de donnée
                    $intertutilisateurs = "INSERT INTO utilisateurs(login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$password')";

                    if (mysqli_query($bdd, $intertutilisateurs)) {
                        $_SESSION['id'] = "Votre compte a bien été crée !";
                header('Location: connexion.php');
                    }
                }

            }
            else
            {
             $erreur = "Vos mot de passe ne correspondent pas !";
            }

        }
        else
        {
            $erreur = "Tous les champs doivent être complétées !";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/acceuil.css">
    <link rel="stylesheet" href="CSS/inscription.css">
    <title>Module de connexion</title>
</head>
<body>
<header>
    <div class="hautdepage">
        <nav class="navbar">
            <div class="picture" >
                <img src="images/3505254.png">
            </div>
            <h1>My Web Site<span class="rose">.</span></h1>
        </nav>
    </div>
</header>
<section class="partitrois">
    <h4>
        Formulaire d'inscription
    </h4>
</section>
<tbody>
<div class="formulaire">
    <form action="inscription.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="login">Login :</label>
                </td>
                <td>
                    <input type="text" name="login" placeholder="Login" id="login" value="<?php if(isset($login)) { echo $login; }?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">Prénom :</label>
                </td>
                <td>
                    <input type="text" name="prenom" placeholder="Prenom" id="prenom" value="<?php if(isset($prenom)) { echo $prenom; }?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom :</label>
                </td>
                <td>
                    <input type="text" name="nom" placeholder="Nom" id="nom" value="<?php if(isset($nom)) { echo $nom; }?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="Mot de passe" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password2">Confirmez :</label>
                </td>
                <td>
                    <input type="password" name="password2" placeholder="Confirme le" id="password2">
                </td>
            </tr>
            <tr>
                <td></td>
                    <td>
                        <br/>
                    <input value="S'inscrire" type="submit" name="valider">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($erreur))
        {
            echo '<font color="red">'.$erreur. "</font>";
        }
    ?>
</div>
</tbody>
<footer class="site-footer">
    <div class="copyright">
        Copyright © Tous droits réservés. Yasmine étudiant LAPLATEFORME
    </div>
<footer>
</body>
</html>