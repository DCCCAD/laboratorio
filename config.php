<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'DBlabcad';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//$conexao-> set_chartset("utf8")
if($conexao->connect_errno){
    echo "Erro";
}else {
    echo "Conexão efetuda!";
}

?>