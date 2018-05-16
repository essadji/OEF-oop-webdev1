<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 9/05/2018
 * Time: 19:35
 */

include_once "Vergelijking.php";


class StandaardMethode extends Vergelijking
{
    private $_array;
    public function __construct($array)
    {
        $this->_array = $array;
        sort($_array);
        return $_array;
    }

/*
    public function StandaardMethode($a, $b)
    {
        if($a==$b){
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    usort($_array, "StandaardMethode");
    foreach($_array as $value){
        echo $value;

    */


}

