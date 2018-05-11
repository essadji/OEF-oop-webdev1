<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */

include "Vergelijking.php";

class StandaardMethode
{
    private $_vergelijk;

    public function __construct(int $pIndex)
    {
        $this->_index = $pIndex;
        $this->_vergelijk = new Vergelijking();
    }

    public function sortArray($pUnSorted)
    {
        usort($pUnSorted, "vergelijk");
    }

    private function vergelijk(string $param1, string $param2)
    {
        return $this->_vergelijk->vergelijk($param1,$param2);


    }

}