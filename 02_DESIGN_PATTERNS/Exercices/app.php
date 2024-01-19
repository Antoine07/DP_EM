<?php

require_once __DIR__ . '/vendor/autoload.php';

use Observer\{User, Data, Log} ;


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

echo "\n" ;

// singleton 

$s = new Singleton\Singleton ;

// $s::$o = 100 ; // static impact tous les objets
// $s->c = 2 ;

// $p = new Singleton\Singleton ;

// // que vaut cette valeur ?
// echo $p::$o ;
// echo "\n" ;
// // que vaut cette valeur ?
// echo $p->c ;

$s->setO( new PDO('sqlite::memory')  ) ;


$pdo = $s->getO(); 

if($pdo){

    var_dump($pdo) ;

}else {
    // sinon on recrée l'instance si elle n'existe pas
    $s->setO( new PDO('sqlite::memory')  ) ;

}

// Observer
echo "\n" ;

$subject = new User;
$data = new Data ;
$log = new Log  ;
$subject->attach($data);
$subject->attach($log);

// crée un nouvel utilisateur => notification 
$subject->create('Alan', 'alan@alan.fr');
echo "\n" ;

var_dump($data );
