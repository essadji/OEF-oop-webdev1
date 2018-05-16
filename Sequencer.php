<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 9/05/2018
 * Time: 19:35
 */
include_once "Vergelijking.php";
include "StandaardMethode.php";
include "IndexMethode.php";

class Sequencer
{
    /**
     * Sequencer constructor.
     * @param $array
     * @param $argumentVergelijking
     * @return $_array
     */
    private $_array;

    public function __construct($array, $argumentVergelijking)
    {
        $this->_array = $array;
        $stdmet = "standaardmethode";
        $indexmet = "indexmethode";
        if($argumentVergelijking == $stdmet){
            $_array = new StandaardMethode($_array);
            return $_array;
        }else if($argumentVergelijking == $indexmet){
            $_array = new IndexMethode($_array);
            return $_array;
        }else{
            throw error_get_last();
        }
    }
}