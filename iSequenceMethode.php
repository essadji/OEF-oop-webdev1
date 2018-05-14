<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 9-5-2018
 * Time: 19:50
 */

interface iSequenceMethode
{
    /**
     * Een functie die test of het eerste argument ‘kleiner’ is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a < $b
     */
    public function kleiner($a, $b);
    /**
     * Een functie die test of het eerste argument ‘groter’ is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a > $b
     */
    public function groter($a, $b);
    /**
     * Een functie die test of het eerste argument ‘gelijk’ is aan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument.
     * @param mixed $b -> Het tweede te vergelijken argument.
     * @return bool -> Returns true if $a == $b
     */
    public function gelijk($a, $b);
}