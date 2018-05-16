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

    public $_myInput = [];
    public $_myIndex;


    public $_run;


    /**
     * Sequencer constructor.
     * @param array $myInput -> is een array van strings
     * @exit -> warning when data is not array
     */
    public function __construct($myInput)
    {

        if(!is_array($myInput)) {
            exit('Data is not an array');
        }

        $this->_myInput = $myInput;

    }


    /**
     * @return StandaardMethode
     */
    public function standaardMethode() {

        return $sortArray = new StandaardMethode($this->_myInput);

    }


    /**
     * @return IndexMethode
     */
    public function indexMethode() {

        return $sortArray = new IndexMethode($this->_myInput, $this->_myIndex);

    }


    /**
     *
     */
    public function compare(){



    }

}