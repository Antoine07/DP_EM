<?php 

namespace Observer ;
use SplObserver ;
use SplSubject ;
class Data implements SplObserver{
    private array $storage = [] ;

    public function update( SplSubject $subject) : void {
        
        $this->storage[] = $subject->getId();
    }

    public function getStorage() : array{

        return $this->storage ;
    }
}
