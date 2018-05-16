<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09-May-18
 * Time: 8:13 PM
 */

class Sequencer
{

}


<?php
/**
 * Methods to be implemented by all implementing classes.
 */
interface sequenceMethode
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
?>