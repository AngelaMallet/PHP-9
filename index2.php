<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2</title>
    </head>
    <body>
        <h1>Date :</h1>
        <p>Exercice 2</p>
        <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
        <!--Affichage de la date sous la forme : 22-11-18 y=18 Y=2018-->
        <?= date('d-m-y'); ?>
    </body>
</html>
