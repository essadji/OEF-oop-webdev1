<?php

include_once './classes/ClassLoader.php';

abstract class PageBuilder{

    public $id = 0;

    static function showTitle(){
        echo "Title";
    }

    static function showNav(){
        echo "Navigation";
    }

    static function showMain(){
        echo "Standaard Methode";

        $seq = new Sequencer(array("Maarten", "Steven", "Tom", "Jan", "Frank"));
        $sorted = $seq->run(new StandaardMethode());
        foreach ($sorted as $value) {
            echo "$value\n";
        }

    }

    static function showAside(){
        echo "Aside";
    }

    static function showFooter(){
        echo "&copy; Maarten Alles";
    }





};



?>