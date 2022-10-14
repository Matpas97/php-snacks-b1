
<?php

/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = '';
if ( isset($_GET['name'])){
    $name =$_GET['name'];
}
$mail = '';
if ( isset($_GET['mail'])){
    $mail =$_GET['mail'];
}
$age = '';
if ( isset($_GET['age'])){
    $age =$_GET['age'];
}

$arPos = strpos($mail,'@');
$dotPos = strpos($mail, '.',$atPos);


if(sterlen($name) > 3 && $atPos > 0 && $dotPos> 0 && is_numeric($age)){
    echo 'Accesso riuscito';
}else{
    echo '  Accesso negato';

}
 

?>