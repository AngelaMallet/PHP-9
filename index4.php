<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice  <p/>
        <p>Afficher le timestamp du jour.</p>
        <p><?= time(); ?></p>
        <p>Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
        <p><?= mktime(15, 0, 0, 8, 2, 2016); ?></p> <!--heure, minute,seconde, mois, jour et année-->
    </body>
</html>
