<?php

require __DIR__ . "/vendor/autoload.php";

use \Endrick\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('87060106');

print_r($resultado);