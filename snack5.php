<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */

 $classe = [
    [
        'name' => 'Luigi',
        'lastname'=> 'Slco',
        'votes'=> [5,7,6,7,9,7]
    ],

    [
        'name' => 'Misto',
        'lastname'=> 'Slcoe',
        'votes'=> [5,7,6,7,9,7]
    ],

    [
        'name' => 'Listo',
        'lastname'=> 'statel',
        'votes'=> [5,7,6,7,9,7]
    ]

    ];

    for($i=0; $i < count($classe); $i++){
        $student = $classe[$i];
        $average = array_sum($student['votes']) / count($student['votes']);
        ?>
        <div>
            <h2><?= $student['name'] ?> <?= $student['lastname'] ?></h2>
            <p><?= $average ?></p>
        </div>
        <?php>
    }









    
?>