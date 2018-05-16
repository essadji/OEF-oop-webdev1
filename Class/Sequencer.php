<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 9-5-2018
 * Time: 19:53
 */


class Sequencer
{
    private $_array;
    private $_vergelijk;

    public function __construct(array $pArray)
    {
        $this->_array = $pArray;

    }

    public function run(Vergelijking $pVergelijk)
    {

        return $pVergelijk->sortArray($this->_array );

    }


}