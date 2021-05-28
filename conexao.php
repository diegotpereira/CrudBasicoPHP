<?php 

$host = "localhost";
$usuario = "root";
$senha = "root";
$bdNome = "phpcrudmasterone";

$con = new mysqli($host,$usuario,$senha,$bdNome);

//echo "Conexão realizada com sucesso";

if ($con->connect_error) {
    # code...
    die("Conexão Falhou:" .$con->connect_error);
}