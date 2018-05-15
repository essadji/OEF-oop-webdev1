<?php
include 'classes/PageBuilder.php';

?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <?php
        PageBuilder::showNav();
    ?>


</head>
<body>


<main>
    <?php
        PageBuilder::showTitle();

        PageBuilder::showMain();

        $mySequencer = new Sequencer();

        $mySequencer->setInput(array("aap", "olifant", "gnoe"));

        $result = mySequencer->run(new IndexMethode());

    ?>



    <br>

</main>

</body>

<footer>
    <?php
        pagebuilder::showFooter();
    ?>
</footer>
</html>
