<?php 

namespace Observer ;
use SplObserver ;
use SplSubject ;
class Log implements SplObserver{

    public function update( SplSubject $subject) : void {
        echo "log :" . $subject->getId() . "<br>";
    }
}
