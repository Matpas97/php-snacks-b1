<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        'home'=> 'Olimpia Milano',
        'away' =>'Cantú',
        'homeScore' => 55,
        'awayScore' => 60
    ],

    [
        'home'=> 'Juven Basket',
        'away' =>'Napoli Basket',
        'homeScore' => 15,
        'awayScore' => 100
    ],

    [
        'home'=> 'Firenze Fire',
        'away' =>'Bologna BC',
        'homeScore' => 45,
        'awayScore' => 46
    ],

];

foreach($matches as $match){
    ?>
    <p><?= $match['home']?> - <?=$match['away']?> | <?= $match['homeScore']?> - <? $match['awayScore']?></p>
    <?php
}


?>