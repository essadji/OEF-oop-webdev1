<?php


class Sequencer
{

    private $_inputArray;
    private $_outputArray;

    function __construct($inputArray){

        /*Defensief programmeren : programma gaat in error indien geen array meegegeven*/
        if(!is_array($inputArray)){
            exit('Error : Dit is geen array. We stoppen ermay');
        }

        $this->_inputArray=$inputArray;

    }

    function sorteerStandaard(){
        $sorteerArray = New StandaardMethode($this->_inputArray);
        $this->_outputArray=$sorteerArray->sorteerArray();
        return $this->_outputArray;
    }

    function sorteerIndex(){
        $sorteerArray = New IndexMethode($this->_inputArray);
        $this->_outputArray=$sorteerArray->sorteerArray();
        return $this->_outputArray;
    }

}


?>