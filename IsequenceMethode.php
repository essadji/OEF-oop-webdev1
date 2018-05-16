<?php
    /**
    * Methods to be implemented by all implementing classes.
    */

    include 'Sequencer.php';
    include 'Vergelijking.php';
    include 'StandaardMethode.php';
    include 'IndexMethode.php';

    interface IsequenceMethode
    {
        /**
      * Een functie die test of het eerste argument 'kleiner' is dan het tweede.
      * @param mixed $a -> Het eerste te vergelijken argument.
      * @param mixed $b -> Het tweede te vergelijken argument.
      * @return bool -> Returns true if $a < $b
      */
     public function kleiner($a, $b);

      /**
      * Een functie die test of het eerste argument 'groter' is dan het tweede.
      * @param mixed $a -> Het eerste te vergelijken argument.
      * @param mixed $b -> Het tweede te vergelijken argument.
      * Return bool -> Returns true if $a > $b
      */
      public function groter($a, $b);

     /**
      * Een functie die test of het eerste argument 'gelijk' is aan het tweede.
      * @param mixed $a -> Het eerste te vergelijken argument.
      * @param mixed $b -> Het tweede te vergelijken argument.
      * @return bool -> Returns true if $s == $b
      */
     public function gelijk($a, $b);

    }
?>