<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 9-5-2018
 * Time: 20:20
 */

include "Sequencer.php";
include "StandaardMethode.php";
include "IndexMethode.php";

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

         $seq = new Sequencer(["Liam","Steven", "Tom","Jan", "Frank"]);
         echo $seq->run(new StandaardMethode());

         echo " Index Methode";

         $seq = new Sequencer(["Liam","Steven", "Tom","Jan", "Frank"]);
         try {
             echo $seq->run(new IndexMethode(2));
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