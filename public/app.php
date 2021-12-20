<?php

$url = "http://localhost:8080/api/notes";
$retorno = file_get_contents($url);

$dados = json_decode($retorno, 1);


print_r($dados);
