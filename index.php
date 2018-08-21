<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Exercice 4</title>
  </head>
  <body>
      <form action="secondPage.php" method="post">
          <label for="login" class="login">Identifiant: </label>
                <input type="text" name="login" id="login" class="login" /><br /><!--Champs à rentrer pour l'identifiant-->
          <label for="login" class="pass">Mot de passe: </label>
                <input type="password" name="pass" id="pass" class="pass" /><br /><!--Champs à rentrer pour le mot de passe-->
          <input type="submit" class="sub" value="Envoyer" /><!--Bouton envoyer pour accéder à secondPage.php-->
      </form>
  </body>
</html>
