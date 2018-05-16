<?php

include_once 'Vergelijking.php';
/**
 * Objecten van deze Class implementeren EEN alfabetische methode om strings in een array te ordenen.
 * Class StandaardMethode
 */
class StandaardMethode extends Vergelijking
{

    private $_arrayToSort;

    /**
     * StandaardMethode constructor.
     * @param $sortArray
     */
    public function __construct($sortArray)
    {

        $this->_arrayToSort = $sortArray;

    }



    public function sortStandaard() {


        usort($this->_arrayToSort, "parent::compare");

        //sort($this->_arrayToSort, SORT_STRING);

        return $this->_arrayToSort;
    }


}