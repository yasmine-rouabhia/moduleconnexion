<?php

//Connexion à la Base De Donnée
$bdd = mysqli_connect('localhost','root', '', 'yasmine-rouabhia_moduleconnexion');
mysqli_set_charset($bdd, 'utf8');

$requete =mysqli_query($bdd,"SELECT * FROM utilisateurs");

$utilisateurs = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/acceuil.css">
    <link rel="stylesheet" href="admin.css">
    <title>Module de connexion</title>
</head>
<body>
<header class="prems">
    <div class="hautpages">
        <nav class="navbarre">
            <div class="picture" >
                <img src="images/3505254.png">
            </div>
            <h1>My Web Site<span class="rose">.</span></h1>
        <div id="adm">
            <h1>Administrateur</h1>
            <div class="titre">
                <ul class="menu">
                    <button class="droite"><a href="deconnexion.php">Se déconnecter</a></button>
                    <button><a href="profil.php" class="button">Editer Profil</a>
                    <li><a href="index.php">Acceuil</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="profil.php">Profil</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
    <tbody>
    <?php foreach ($utilisateurs as $utilisateur){ ?>
    <table border ="3" cellpadding="3" cellspacing="3">
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Password</th>
        </tr>

        <tr>
            <td> <?php echo $utilisateur['id'];?> </td>
            <td> <?php echo $utilisateur['login'];?> </td>
            <td> <?php echo $utilisateur['prenom'];?> </td>
            <td> <?php echo $utilisateur['nom'];?> </td>
            <td> <?php echo $utilisateur['password'];?> </td>
        </tr>
        <?php } ?>
        </div>

        </nav>
        </div>
    </table>
    </tbody>
<footer>
    <div class="copyright">
        Copyright © Tous droits réservés. Yasmine étudiant LAPLATEFORME
    </div>
</footer>
</body>
</html>
