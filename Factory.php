<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 16/05/2018
 * Time: 21:21
 */
include ("Sequencer.php");

class Factory
{
    public static function MakeSequencer(){
        return new Sequencer();
    }
}