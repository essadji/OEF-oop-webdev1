<?php


/**
 * Objecten van deze Class (her)ordenen arrays met stings op basis van een meegegeven argument van de Class 'Vergelijking'.
 * Class Sequencer
 */
class Sequencer
{

    public $_myInput = [];
    public $_myIndex = 0;



    # public $_run;


    /**
     * Sequencer constructor.
     * @param array $myInput -> is een array van strings
     * @throws Exception -> warning when data is not array
     */
    public function __construct(array $myInput)
    {

        if(!is_array($myInput)) {
            Throw new Exception("Data is not a array");
        }

        $this->_myInput = $myInput;

    }


    /**
     * @return StandaardMethode
     */
    public function standaardMethode() {

        $sortArray = new StandaardMethode($this->_myInput);


        return $sortArray->sortStandaard();

    }


    /**
     * @return IndexMethode
     */
    public function indexMethode() {

        return $sortArray = new IndexMethode($this->_myInput, $this->_myIndex);

    }


}