<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../web/index.php";
    require_once __DIR__."/../src/Leet.php";

    $app = new Silex\Application();

    return $app;
 ?>
