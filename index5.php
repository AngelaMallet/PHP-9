<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 5 </p>
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016..</p>
        <?php
        $date1 = new DateTime();
        $date2 = new DateTime('2016-05-16');
        $diff = $date1->diff($date2);
        ?>
        <p><?= $diff->format('%R%a jours'); ?></p>
        <!--DateInterval::format Caractère % littéral,
        (R) Signe "-" lorsque négatif, "+" si positif
        Nombre total de jours, provenant de la méthode DateTime::diff() -->
        <?php
        $dateBefore = strtotime('2016-05-16'); //strtotime — Transforme un texte anglais en timestamp
        $difference = ceil(($dateBefore - time()) / 86400); //ceil — Arrondit au nombre supérieur
        ?>
        <p><?= $difference; ?></p>
</body>
</html>
