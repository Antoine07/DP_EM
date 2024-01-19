<?php 
namespace Singleton ;

 class Singleton{

    public static $o = null;

    public int $c = 0 ;


    public function setO($o){
        self::$o = $o ;
    }

    public function getO(){

        if( self::$o ) return self::$o ;

        return "pas d'objet en mémoire" ;
    }

 }