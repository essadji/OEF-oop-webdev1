<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 9/05/2018
 * Time: 19:35
 */

include_once "Isequence.php";

abstract class Vergelijking implements Isequencer
{
    private $_array;
    public function __construct($array){
        $this->_array = $array;
}

    /**Een functie die test of het eerste argument 'kleiner is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a < $b
     */
    public function kleiner($a, $b)
    {
        return ($a<$b) ? true : false;
    }

    /**
     * een functie die test of het eerste argument groter is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * bool -> Returns true if $a > $b
     */
    public function groter($a, $b)
    {
        return ($a>$b) ? true : false;
    }

    /**
     * een functie die test of het eerste argument groter is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * bool -> Returns true if $a == $b
     */
    public function gelijk($a, $b)
    {
        return ($a == $b) ? true : false;
    }
}