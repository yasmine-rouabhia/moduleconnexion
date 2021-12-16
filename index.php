<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/acceuil.css">
    <title>Module de connexion</title>
</head>
<body>
    <header class="premier">
        <div class="hautdepage">
            <nav class="navbar">
                <div class="picture" >
                        <img src="images/3505254.png">
                </div>
                    <h1>My Web Site<span class="rose">.</span></h1>
                    <div class="titre">
                        <ul class="menu">
                            <?php
                            if(isset($_SESSION['login']))
                                {
                            ?>
                            <h2><?php echo $_SESSION['login']. "Vous êtes connecter"?></h2>
                            <button class="droite"><a href="deconnexion.php">Se déconnecter</a></button>
                            <button><a href="profil.php" class="button">Editer Profil</a>
                                <?php
                                }else{
                                ?>
                            <li><a href="inscription.php">Inscription</a></li>
                            <li><a href="connexion.php">Connexion</a></li>
                            <li><a href="index.php">Acceuil</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>
    <div class="conect">
        <section class="partiun">
            <h4>
                New Project
            </h4>
                <p>
                    Aujourd'hui nous re voila pour un nouveau projet il s'agis du module de connexion,<br>
                    le but de se projet est de créer plusieurs pages web qui se relit grâce au php.<br>
                    Nous devons faire une page avec un formulaire, une page de connexion et une page<br>
                    de modification de profil pour notre Project Pool.<br>
                    Pour me rejoindre et participez à mon job je vous invite à suivre les instruction<br>
                    et vous laisser guider petit à petit en vous inscrivant...
                </p>
        </section>

        <section class="liens">
           <h3><a href="https://github.com/yasmine-rouabhia/moduleconnexion">LIEN GITHUB</a></h3>
        </section>
    <?php
    }
    ?>
    </div>
<footer class="site-footer">
    <div class="copyright">
        Copyright © Tous droits réservés. Yasmine étudiant LAPLATEFORME
    </div>
</footer>
</body>
</html>

