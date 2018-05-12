<?php

include "../interfaces/IsequenceMethode.php";

/**
 * Deze Class beschrijft objecten die algoritmes voor ordening van stings bevatten.
 * Alle algoritmes implementeren de interface sequenceMethode
 * Class Vergelijking
 */
class Vergelijking implements IsequenceMethode
{

    //public $result;

     /**
     * Een functie die test of het eerste argument 'kleiner' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a < $b
     * @throws exception -> Returns string
     */
    public function kleiner($a, $b) {
        if($a < $b) {
            return $run = -1;
        }else {
            throw new Exception("no data");
        }
    }

    /**
     * Een functie die test of het eerste argument 'groter' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a > $b
     * @throws exception -> Returns string
     */
    public function groter($a, $b){
        if($a > $b) {
            return $run = 1;
        }else {
            throw new Exception("no data");
        }
    }

    /**
     * Een functie die test of het eerste argument 'gelijk' is dan het tweede.
     * @param mixed $a -> Het eerste te vergelijken argument
     * @param mixed $b -> Het tweede te vergelijken argument
     * @return bool -> Returns true if $a == $b
     * @throws exception -> Returns string
     */
    public function gelijk($a, $b){
        if($a == $b) {
            return $run = 0;
        }else {
            throw new exception("no data");
        }
    }


}