<?php
/**
 * Created by PhpStorm.
 * User: yohana
 * Date: 23/05/2018
 * Time: 07:27
 */


/* standard method sortting arry*/


class StandaardMethode
{
    function alfabetischSorteren{
        if ($a==$b) return 0;
        return ($a<$b)?-1:1;
    }
$a=array(4,2,8,6);
usort($a,"alfabetischSorteren");
}
?>