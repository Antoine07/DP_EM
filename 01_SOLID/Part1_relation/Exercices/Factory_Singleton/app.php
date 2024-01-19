<?php

require_once __DIR__ . '/vendor/autoload.php';

$factory = new Factory\FactoryModel;

// aucun model en mémoire
// print_r($factory);

$factory->createModel(id : 1);
$factory->createModel(id : 2);
$factory->createModel(id : 3);
$factory->createModel(id : 4);
$factory->createModel(id : 5);

// les modèles en mémoire
echo $factory;