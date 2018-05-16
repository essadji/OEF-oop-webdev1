<?php

include 'classes/Vergelijking.php';

class StandaardMethode extends Vergelijking
{
    private $_arrayToSort;

        public function __construct(array $arrayToSort)
        {
            parent::__construct($arrayToSort);
            $this->_arrayToSort = $arrayToSort;
        }

    function sorteerArray(){
        //Vergelijking::__construct($this->_arrayToSort);
        //usort($this->_arrayToSort,Vergelijking::kleiner());
        $naarfunctie = Vergelijking::kleiner();
        usort($this->_arrayToSort,'$naarfunctie');
    }


}