<?php
include "motoren.php";

/**
 * Created by PhpStorm.
 * User: metin
 * Date: 09/05/2018
 * Time: 19:44
 */
class Check
{

    /**
     * @var
     */
    private $_kleiner;


    /**
     * @var
     */
    private $_gelijk;


    /**
     * @var
     */
    private $_groter;


    /**
     * @return int
     */
    public function vergelijking()
    {

        return 1;

    }



    public function sort()
    {
        $sort = array('motor1', 'motor2', 'motor3');
        usort($sort, "vergelijking");


    }



}


?>
<!---->
<!--$myMotor = new naamMotor();-->
<!--$myMotor->setInput(array("motor1", "motor2", "motor3"));-->
<!--$result = $myMotor -> run();-->
