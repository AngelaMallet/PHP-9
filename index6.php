<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 6</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 6 </p>
        <p>Afficher le nombre de jour dans le mois de février de l'année 2016</p>
        <?php
        //cal_days_in_month — Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 29
        ?>
        <p>Le nombre de jours <?= $number; ?> en février</p>
    </body>
</html>
