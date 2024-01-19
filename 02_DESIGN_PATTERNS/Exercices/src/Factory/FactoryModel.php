<?php 

namespace Factory;

class FactoryModel {

    private array $storage = [];

    public function createModel(int $id){
        $id =  $id * 10 ;
        $m = new Model($id);
        $this->storage[] = $m ;

        return $m ;
    }

    public function __toString()
    {
        $ids = array_map(function($m){

            return (string) $m->getId();

        }, $this->storage);

        return implode( " ", $ids );
    }
}