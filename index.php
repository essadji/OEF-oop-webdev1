<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/05/18
 * Time: 21:05
 */
include 'classes/Vergelijking.php';

/*
function user_compare($x, $y)
{
    if ($x == $y)
        return 0;
    else if ($x > $y)
        return 1;
    else
        return -1;
}
$array1 = array(22,33,66,55,11);
usort($array1, 'user_compare');
foreach($array1 as $key => $value)
{
    echo "$key: $value\n";
}
*/

$denarray = array('a','b','c','d','e');

$mysequencer = new Vergelijking($denarray);

/*
$users = array( array( "peter", "male", "46"),
    array( "hans", "male", "19"),
    array( "john", "male", "30"),
    array( "linda", "female", "54"),
    array( "erika", "female", "79"));
usort($users, "whatevername");
function whatevername($whatever1, $whatever2)
{
    // $whatever1 and $whatever2 are items from the $user array.
    // index [2] is the age.
    // Check if $whatever1 is older than $whatever2.
    // Return 1 tells usort to swap the positions.
    return $whatever1[2] > $whatever2[2];
}

echo("<pre>");
print_r($users);
echo("</pre>");
*/