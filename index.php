<?php


require_once('classes/classloader.php');




/*Standaardmethode*/
//Test defensief programmeren - moet in error gaan*/
/*$mySequencer = new Sequencer('test');*/
$mySequencer = new Sequencer(array('Jan','Piet','Els','Ann'));
$mySequencer->setSortMethod(1);
$result=$mySequencer->sorteer();
var_dump($result);

/*Indexmethode*/
$mySequencer = new Sequencer(array('Jos','Frans','Fons','Annie'));
$mySequencer->setSortMethod(2);
$mySequencer->setCharIndex(1);
$result=$mySequencer->sorteer();
var_dump($result);

?>
