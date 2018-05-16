<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 09/05/2018
 * Time: 19:30
 */

include "StandaardMethode.php";
include "IndexMethode.php";


/**
 * Class Sequencer
 */
class Sequencer
{
    private $_teVerwerkenLijst = array();
    private $_standaardMethode;
    private $_indexMethode;

    /**
     * Sequencer constructor.
     * @param array $newArray
     */
    function __construct()
    {
        $this->_standaardMethode = new StandaardMethode();
        $this->_indexMethode = new IndexMethode();
    }

    /**
     *
     */
    function GetLijstAlfabetisch(array $newArray){
        $this->_teVerwerkenLijst = $this->_standaardMethode->Alfabetisch($newArray);
        $arrayLength = count($this->_teVerwerkenLijst);
        for ($x = 0; $x < $arrayLength; $x++){
            echo $this->_teVerwerkenLijst[$x];
            echo "<br>";
        }
    }

    function GetLijstAlfabetischOpBasisvanindex(array $newArray, int $index){
        $this->_teVerwerkenLijst = $this->_indexMethode->AlfabetichsOpBasisVanIndex($newArray, $index);
        print_r($this->_teVerwerkenLijst);
            echo "<br>";

    }


}