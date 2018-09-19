<?php

$user = 'root';
$pass = '';
    

try {
    $connection = new PDO('mysql:host=localhost; dbname=Soccerdome', $user, $pass);
}catch(PDOException $e){
    echo $e->getMessage();
}
   

?>