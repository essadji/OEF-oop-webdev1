<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/05/18
 * Time: 19:36
 */

include "interfaces/sequenceMethode.php";


abstract class Sequencer implements sequenceMethode
{
    private $_array;

    public function __construct(array $array)
    {
        $this->_array = $array;
    }


}