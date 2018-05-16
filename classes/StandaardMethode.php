<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 9/05/2018
 * Time: 19:53
 */

class StandaardMethode
{

    private $_arrayToSort;

    /**
     * StandaardMethode constructor.
     * @param $arrayToSort
     */
    function __construct($arrayToSort){
        $this->_arrayToSort=$arrayToSort;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    private static function sorteer($a, $b)
    {
        $vgl = new Vergelijking();
        if ($vgl->gelijk($a,$b)) {
            return 0;
        }
        return ($vgl->kleiner($a,$b)) ? -1 : 1;
    }

    /**
     * @return mixed
     */
    function sorteerArray(){
        usort($this->_arrayToSort,array('StandaardMethode','sorteer'));

        return $this->_arrayToSort;
    }
}