<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:54
 */

include "StandaardMethode.php";
include "Vergelijking.php";

class IndexMethode extends StandaardMethode
{
    private $_vergelijk;

    private $_index;

    public function __construct(int $pIndex)
    {
        $this->_index = $pIndex;
        $this->_vergelijk = new Vergelijking();
    }

    public function sortArray($unSorted)
    {
        usort($pUnSorted, "vergelijk");
    }

    private function vergelijk(string $param1, string $param2)
    {
        return $this->_vergelijk->vergelijk(substr($param1, $this->_index,1),substr($param2, $this->_index,1));
    }

}