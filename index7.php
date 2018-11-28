<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 7</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 7</p>
        <p>Afficher la date du jour + 20 jours :</p>
        <?php
        //time zone de la France
        date_default_timezone_set('Europe/Paris');
        $today = date('d-m-Y');
        //Ajout de 20 jours à ma date 
        $next_day = date('d-m-Y', strtotime($today . '20 day'));
        ?>
        <p><?= $next_day;?></p>
    </body>
</html>
