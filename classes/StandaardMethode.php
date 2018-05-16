<?php

class StandaardMethode
{
    private $_arrayToSort;

    function __construct($arrayToSort){
        $this->_arrayToSort=$arrayToSort;
    }

    // SIG :: waar/hoe gebruik je deze functie?
    private static function sorteer($a, $b)
    {
        $vgl=new Vergelijking();

        if ($vgl->gelijk($a,$b)) {
            return 0;
        }
        return ($vgl->kleiner($a,$b)) ? -1 : 1;
    }

    function sorteerArray(){
        usort($this->_arrayToSort,array('StandaardMethode','sorteer'));
// SIG :: knap gevonden, die array als tweede argument; slechts 1 tweedejaars heeft iets dergelijks gevonden/gebruikt vorig jaar
        return $this->_arrayToSort;
    }

}

?>