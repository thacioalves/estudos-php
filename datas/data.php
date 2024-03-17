<?php

$data = new DateTime();
echo $data->format('d-m-Y H:i:s') . PHP_EOL;

$intervalo = new DateInterval('PT5M'); // adiciona um periodo de 5 minutos
$data->add($intervalo);

var_dump($data);