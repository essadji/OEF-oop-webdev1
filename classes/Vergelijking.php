<?php

include ("interfaces/IsequenceMethode.php");

/**
 * Deze Class beschrijft objecten die algoritmes voor ordening van stings bevatten.
 * Alle algoritmes implementeren de interface sequenceMethode
 * Class Vergelijking
 */
abstract class Vergelijking implements IsequenceMethode
{

    public function __construct()
    {



    }

    public function compare($a, $b) {

        if($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;

    }

     /**
     * Een functie die test of het eerste argument 'kleiner' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a < $b
     */
    public function kleiner($a, $b) {

        return ($a < $b) ? true : false;

    }

    /**
     * Een functie die test of het eerste argument 'groter' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a > $b
     */
    public function groter($a, $b){

        return ($a > $b) ? true : false;

    }

    /**
     * Een functie die test of het eerste argument 'gelijk' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a == $b
     * @throws exception -> Returns string
     */
    public function gelijk($a, $b){

        return ($a == $b) ? true : false;

    }

}