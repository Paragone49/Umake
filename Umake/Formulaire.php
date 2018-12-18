<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaires</title></head>

<body>
<form id="form1" name="form1" method="post" action="formulaire-traitement.php">
  <p>
    <label for="textfield">Animal</label>
    <input type="text" name="Animal" id="Animal" autocomplete="on"/>
  </p>
    <fieldset id="Qualité"><b>Qualité</b><br>
        <input type="radio" value="etoile1" name="etoile">Une étoile<br>
        <input type="radio" value="etoile2" name="etoile">Deux étoiles<br>
        <input type="radio" value="etoime3" name="etoile">Trois étoiles<br>
    </fieldset>
    <input type="submit" name="button" id="button" value="Envoyer" />
  </p>
</form>
</body>
</html>

<?php



?>