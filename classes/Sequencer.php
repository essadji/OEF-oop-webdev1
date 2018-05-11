<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 9/05/2018
 * Time: 19:52
 */


include './interfaces/sequenceMethode.php';
include './classes/Vergelijking.php';

class Sequencer
{
    private $_array;

    public function __construct(array $array){
        $this->_array = $array;
    }

    public function sorteerArray(array $array)
    {

        return usort($inputArray);
    }



}