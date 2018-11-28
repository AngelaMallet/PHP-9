<?php
$selectedMonth = '';
$selectedYear = '';
$count = 0; 
$noCount = ''; 
//date du calendrier minimum
$yearMin = 1970;
//date du calendrier maximum
$yearMax = 2028;
//tableau avec les mois de l'année
$months = [
    1 => 'janvier',
    2 => 'février',
    3 => 'mars',
    4 => 'avril',
    5 => 'mai',
    6 => 'juin',
    7 => 'juillet',
    8 => 'aout',
    9 => 'septembre',
    10 => 'octobre',
    11 => 'novembre',
    12 => 'décembre'
];
// si ma variable GET month et GET year existent alors,
if (isset($_POST['month']) && isset($_POST['year'])) {
    $selectedMonth = $_POST['month'];
    $selectedYear = $_POST['year'];
    $number = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);// nombres de jours dans le mois de l'année selectionnés
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $firstDay = strftime('%A', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));

    function day($day) {
        global $firstDay;
        global $noCount;
        global $count;
        $noCount = '';
        if ($firstDay == $day) {
            $noCount = 'ok';
            return $count = 1;
        }
        if ($count != 0 && $noCount != 'ok') {
            return $count += 1;
        }
    }
    
    function limitDay() {
        global $count;
        global $number;
        if (isset($count)) {
            if ($count < $number) {
                return $count += 1;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Calendrier PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="styletp.css">
    </head>
    <body>
        <h1>Calendrier</h1>
        <div class="container">
            <form method="POST" action="index9.php">
                <div class="row">
                    <div class="col">
                        <div class="input-field col s12">
                            <select name="month">
                                <option value="" disabled selected>Choisissez votre mois</option>
                                <?php foreach ($months as $key => $month) { ?>
                                    <option value="<?= $key; ?>" <?= $key==$selectedMonth ? 'selected' : ''; ?>><?= $month; ?></option> 
                                <?php } ?>
                            </select>
                            <label>Choix du mois</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-field col s12">
                            <select name="year">
                                <option value="" disabled selected>Choisissez votre année</option>
                                <?php for ($yearMin; $yearMin <= $yearMax; $yearMin++) { ?>
                                    <option value="<?= $yearMin; ?>" <?= $yearMin==$selectedYear ? 'selected' : ''; ?>><?= $yearMin; ?></option>
                                    <!--<option value="1" selected>Janvier</option>-->
                                        <?php } ?>
                            </select>
                            <label>Choix de l'année</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light valign-wrapper grey lighten-1" type="submit" name="action">
                                Envoyer<i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="striped grey lighten-1">
                <thead>
                    <tr class="white-text text-darken-2">
                        <th class="center-align">lundi</th>
                        <th class="center-align">mardi</th>
                        <th class="center-align">mercredi</th>
                        <th class="center-align">jeudi</th>
                        <th class="center-align">vendredi</th>
                        <th class="center-align">samedi</th>
                        <th class="center-align">dimanche</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_POST['month']) && isset($_POST['year'])) { ?>
                    <tr>
                        <td><?= day('lundi'); ?></td>
                        <td><?= day('mardi'); ?></td>
                        <td><?= day('mercredi'); ?></td>
                        <td><?= day('jeudi'); ?></td>
                        <td><?= day('vendredi'); ?></td>
                        <td><?= day('samedi'); ?></td>
                        <td><?= day('dimanche'); ?></td>
                    </tr>
                    <?php for ($count; $count < $number; $count) { ?>
                    <tr>
                        <?php for ($td = 0; $td < 7; $td++) { ?>
                        <td><?= limitDay(); ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
        <script>
            $(document).ready(function () {
                $('select').formSelect();
            });
        </script>
    </body>
</html>