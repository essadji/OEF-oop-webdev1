<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 9/05/2018
 * Time: 20:00
 */
include "Sequencer.php";

$array = array("test", "nogeentest","drietest");
$methode = "standaardmethode";


$mySequencer = new Sequencer($array, $methode);

if (!empty($mySequencer)) {
    foreach($mySequencer as $value){
        echo $value;
    }
}