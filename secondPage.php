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
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Exercice 4</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="offset-3 col-6 blockForm">
                  <p><!--Affichage des valeurs enregistrées en cookie par index.php-->
                    <?php
                      if(isset($_POST['login']) && isset($_POST['pass'])){
                          echo 'Votre login est <b>' . $_COOKIE['login'] . '</b> et votre mot de passe est <b>' . $_COOKIE['pass'] . '</b>';
                      }
                    ?>
                  </p>
              </div>
          </div>
      </div>
  </body>
</html>
