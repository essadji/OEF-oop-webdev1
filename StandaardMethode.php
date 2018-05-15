<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */

include_once "Vergelijking.php";

class StandaardMethode
{
    private $_vergelijk;

    public function __construct()
    {
        $this->_vergelijk = new Vergelijking();
    }



    public function comp(string $param1, string $param2)
    {
        return $this->_vergelijk->vergelijk($param1, $param2);

    }

    public function sortArray(array $pUnSorted)
    {
        usort($pUnSorted, array($this,"comp"));
        return $pUnSorted;
    }

}