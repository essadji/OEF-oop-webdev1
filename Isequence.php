<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 9/05/2018
 * Time: 19:27
 */

/**
 * Methods to be implemented by all implemented classes
 */

interface Isequencer
{
    /**Een functie die test of het eerste argument 'kleiner is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a < $b
     */

    public function kleiner($a, $b);

    /**
     * een functie die test of het eerste argument groter is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * bool -> Returns true if $a > $b
     */

    public function groter($a, $b);

    /**
     * een functie die test of het eerste argument groter is dan het tweede
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * bool -> Returns true if $a == $b
     */

    public function gelijk($a, $b);
}

?>