<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09-May-18
 * Time: 8:22 PM
 */

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