<?php
$dsn = 'mysql:host=localhost;dbname=moove';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO($dsn, $user, $pass);

}catch(PDOException $ex){
    echo 'Erro: '.$ex->getMessage();
    
}



?>