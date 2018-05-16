<?php
include ("ArrayLoader.php");
/*include ("Sequencer.php");
$newArray = array();
$mySequence = new Sequencer();
if (isset($_POST["array"])){
    $getArray = ($_POST["array"]);
    if ($getArray != "" || $getArray != null){
        $newArray = unserialize($getArray);
    }
}
var_dump($newArray);

if (isset($_POST["value"])){
    var_dump($newArray);
    array_push($newArray, $_POST["value"]);
    $newArray = serialize($newArray);
    var_dump($newArray);

}
else{
    $mySequence = new Sequencer();
}*/

if (isset($_POST["value"])){
    ArrayLoader::FillArray($_POST["value"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="form" method="POST" action="Index.php" >
    Geef een element van de array in :
    <br />   <br />
    <input name="value" type="text">
    <input name="array" type="hidden" value=<?php $newArray ?>>
    <button type="submit">GO!</button>
</form>
</body>
</html>