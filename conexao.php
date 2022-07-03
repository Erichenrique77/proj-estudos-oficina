<?php 
//chama o arquivo de configuracao
require_once("config.php");
//fuso horario
date_default_timezone_set('America/Sao_Paulo');

try{
    $pdo = new PDO("mysql:dbname=$bdname;host=$servidor;charset=utf8"
    , "$username", "$senha");

    //echo "<h1>Conexão realizada com sucesso</h1>";
} catch (Exception $e){
    echo "Erro ao conectar com o banco de dados ".$e;
}

?>