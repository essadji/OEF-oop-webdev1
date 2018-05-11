<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */


include "StandaardMethode.php";

class Sequencer
{
    private $_array;

    public function __construct($pArray)
    {
        $array=$pArray;
        $vergelijk= new Vergelijking();
    }

    public function run(StandaardMethode $pSortMethod)
    {

        return $pSortMethod->sortArray($this->_array );

    }


}