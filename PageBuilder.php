<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 9-5-2018
 * Time: 20:20
 */

include_once "Sequencer.php";
include_once "StandaardMethode.php";
include_once "IndexMethode.php";

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

         $seq = new Sequencer(array("Liam","Steven", "Tom","Jan", "Frank"));
         $sorted = $seq->run(new StandaardMethode());

         foreach ($sorted as $value) {
             echo "$value\n";
         }

         echo " Index Methode";

         $seq = new Sequencer(array("Liam","Steven", "Tom","Jan", "Frank"));
         try {
             $sorted =  $seq->run(new IndexMethode(2));
             foreach ($sorted as $value) {
                 echo "$value\n";
             }
         }catch(Exception $e){
             echo 'Caught exception: ',  $e->getMessage(), "\n";
         }


     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "&copy; Geert Van Gent";
        }





 };



?>}