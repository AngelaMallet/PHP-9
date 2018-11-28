<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice TP</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 8</p>
        <p>Afficher la date du jour - 22 jours :</p>
        <?php
        //time zone
        date_default_timezone_set('Europe/Paris');
        //Aujourd'hui
        $today = date('d-m-Y');
        //ajout -22 jours à la date d'aujourd'hui
        $next_day = date('d-m-Y', strtotime($today . '- 22 day'));
        ?>
        <p><?= $next_day; ?></p>
</body>
</html>
