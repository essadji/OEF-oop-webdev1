<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:53
 */


class StandaardMethode extends vergelijking
{

    public function __construct()
    {

    }

    private static function comp(string $param1, string $param2)
    {
        return parent::vergelijk($param1, $param2);

    }
    public function sortArray(array $pUnSorted)
    {
        usort($pUnSorted, array(get_class($this),"comp"));
        return $pUnSorted;
    }
}
