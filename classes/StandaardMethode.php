<?php


class StandaardMethode
{

    private $_arrayToSort;

    function __construct($arrayToSort){
        $this->_arrayToSort=$arrayToSort;
    }

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

        return $this->_arrayToSort;
    }

}

?>