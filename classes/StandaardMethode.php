<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 9/05/2018
 * Time: 19:53
 */

class StandaardMethode
{


    public function __construct($array)
    {
        $this->$_array = $array;
    }

    public function sorteer()
    {
        return sort($array);
    }
}