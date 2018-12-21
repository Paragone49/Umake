<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <base href="/">
        <link href="stylesform.css">
        <title>Formulaires</title>
    </head>
    <body>
        <form class="blockform" id="form1" name="form1" method="post" action="index.php">
            <fieldset class="field" id="Chasse"><b>Votre chasse :</b>
                <div>
                    <label for="animal">Animal</label>
                    <select name="animal" id="animal">
                        <option>Séléctionnez</option>
                        <option value="loup" id="loup" name="loup">Loup</option>
                        <option value="ours" id="ours" name="ours">Ours</option>
                    </select>
                </div>
                <div>
                    <label class="blocklabel"><b>Qualité</b><br> </label>
                    <input class="etoile1" type="radio" value="etoile1" name="etoile">Une étoile<br>
                    <input class="etoile2" type="radio" value="etoile2" name="etoile">Deux étoiles<br>
                    <input class="etoile3" type="radio" value="etoile3" name="etoile">Trois étoiles<br>
                </div>
            </fieldset><input type="submit" name="button" id="button" value="Envoyer"/>
        </form>
    </body>
</html>
