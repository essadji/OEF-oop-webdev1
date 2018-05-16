<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 09/05/2018
 * Time: 19:30
 */

abstract class Vergelijking implements IsequenceMethode
{

    /**
     * Een functie die test of het eerste argument ‘kleiner’ is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a < $b
     */
    public function kleiner($a, $b)
    {
        if ($a < $b){
            return true;
        }
        return false;
    }

    /**
     * Een functie die test of het eerste argument ‘groter’ is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a > $b
     */
    public function groter($a, $b)
    {
        if ($a > $b){
            return true;
        }
        return false;
    }

    /**
     * Een functie die test of het eerste argument ‘gelijk’ is aan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a == $b
     */
    public function gelijk($a, $b)
    {
        if ( $a === $b){
            return true;
        }
        return false;
    }
}