<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 9/05/2018
 * Time: 19:52
 */

include_once ('interfaces/ISequenceMethode.php');

abstract class Vergelijking implements ISequenceMethode
{
    /**
     * functie die $a en $b vergelijkt om na te gaan of $a kleiner is dan $b. geeft een boolean terug
     * @param mixed $a
     * @param mixed $b
     * @return bool
     */
    public function kleiner($a, $b)
    {
        return ($a < $b) ? true : false;
    }

    /**
     * @param mixed $a
     * @param mixed $b
     * @return bool
     */
    public function groter($a, $b)
    {
        return ($a > $b) ? true : false;
    }

    /**
     * @param mixed $a
     * @param mixed $b
     * @return bool
     */
    public function gelijk($a, $b)
    {
        return ($a == $b) ? true : false;
    }


}

