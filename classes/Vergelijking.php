<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/05/18
 * Time: 19:36
 */
include 'Sequencer.php';

class Vergelijking extends Sequencer
{
    private $_a;

    public function __construct(array $denarray)
    {
        parent::__construct($denarray);
        $this->_a = $denarray;
    }

    //methodes
    public function kleiner(Sequencer $a, Sequencer $b)
    {
        //return $a < $b;
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }
    public function groter(Sequencer $a, Sequencer $b)
    {
        //return $a > $b;
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }
    public function gelijk(Sequencer $a, Sequencer $b)
    {
        //return $a == $b;
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }

}