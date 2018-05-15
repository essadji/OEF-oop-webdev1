<?php


require_once('classes/classloader.php');


$mySequencer = new Sequencer(array('Jan','Piet','Els','Ann'));

//Test defensief programmeren - moet in error gaan*/
/*$mySequencer = new Sequencer('test');*/

$result=$mySequencer->sorteerStandaard();
var_dump($result);

?>
