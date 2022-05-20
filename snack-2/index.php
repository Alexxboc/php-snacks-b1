<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, 
    che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php 

$userName = $_GET['name'];
$userMail = $_GET['mail'];
$userAge = $_GET['age'];

echo $userName, $userMail, $userAge;

if(strlen($userName) > 3 && strpos($userMail, '.') && strpos($userMail, '@') && is_numeric($userAge)) {
    var_dump('Accesso riuscito');
} else {
    var_dump('Accesso negato');
};
?>