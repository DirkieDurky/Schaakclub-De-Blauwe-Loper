<?php

namespace Dirk\SchaakclubDeBlauweLoper;

use Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
$Root = $_ENV["ROOT"];

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schaakclub de Blauwe Loper</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once("header/header.php"); ?>
    <div id="page">
        <?php
        if (isset($_GET['page']) && in_array("pages/" . $_GET['page'] . ".php", glob("pages/*.php"))) {
            include_once("pages/" . $_GET['page'] . ".php");
        }
        ?>
    </div>
</body>

</html>