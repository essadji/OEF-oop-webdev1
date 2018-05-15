<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 9-5-2018
 * Time: 19:53
 */


include "StandaardMethode.php";

class Sequencer
{
    private $_array;
    private $_vergelijk;

    public function __construct(array $pArray)
    {
        $this->_array = $pArray;
        $this->_vergelijk = new Vergelijking();
    }

    public function run(StandaardMethode $pSortMethod)
    {

        return $pSortMethod->sortArray($this->_array );

    }


}