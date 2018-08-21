<?php
if(isset($_POST['login']) && isset($_POST['pass'])){
    setcookie('login', $_POST['login'], time() + 365*24*3600);//Création du cookie en récupérant la valeur de l'input login
    setcookie('pass', $_POST['pass'], time() + 365*24*3600);//Création du cookie en récupérant la valeur de l'input pass
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice4</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <p><!--Affichage des valeurs enregistrées en cookie par index.php-->
      <?php
        if(isset($_POST['login']) && isset($_POST['pass'])){
            echo 'Votre login est <b>' . $_COOKIE['login'] . '</b> et votre mot de passe est <b>' . $_COOKIE['pass'] . '</b>';
        }
      ?>
    </p>
  </body>
</html>
