<?php

include "Vergelijking.php";
include "StandaardMethode.php";
include "IndexMethode.php";

/**
 * Objecten van deze Class (her)ordenen arrays met stings op basis van een meegegeven argument van de Class 'Vergelijking'.
 * Class Sequencer
 */
class Sequencer
{

    public $myInput = [];
    public $run;

    /**
     * Sequencer constructor.
     * @param $run
     * @param $myInput
     * @param $vergelijking
     * @throws Exception
     */
    public function __construct($run, $myInput, $vergelijking)
    {
        if ($this->$run > 0) {
            return usort($this->$myInput, $this->$vergelijking);
        } else {
            throw new Exception("no data");
        }
    }

    /**
     * zet de woorden in de array die wordt geordend
     * @param string $word -> woord dat van een input komt die moet toegevoegd worden in een array
     */
    public function setInput(string $word)
    {
        array_push($this->myInput, $word);
    }

    /**
     * @param $vergelijking
     * @return bool
     * @throws Exception
     */
    public function run($vergelijking){
        if($vergelijking > 0) {
            return $run = true;
        }else {
            throw new Exception("No values");
        }
    }

}