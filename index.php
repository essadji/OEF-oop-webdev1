<?php

include 'classes/classLoader.php';

$mySequence = new Sequencer(array('Jan', 'Piet', 'Joris', 'Korneel'));



$result = $mySequence->standaardMethode();

print_r($result);

$index = $mySequence->indexMethode();

print_r($index);