<?php
setlocale(LC_TIME, 'fr_FR.UTF8', 'fra');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 3</p>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
        <p>Bonus : Le faire en français.</p>
        <!--Affichage de quelque chose comme : jeudi 22 novembre 2018-->
        <p><?= date('l d F Y'); ?></p> <!--(l)Jour de la semaine, textuel, version longue, en anglais-->
        <!--(d)Jour du mois, sur deux chiffres (avec un zéro initial) (F)Mois, textuel, version longue;
        (Y)Année sur 4 chiffres-->
        <p><?= strftime('%A %d %B %Y'); ?></p>
        <!--(%A)Nom complet du jour de la semaine
        (%d)Jour du mois en numérique, sur 2 chiffres (avec le zéro initial)
        (%B)Nom complet du mois, suivant la locale
        (%Y)L'année, sur 4 chiffres-->
    </body>
</html>
