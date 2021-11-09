<?php

require_once 'vendor/autoload.php';

$dbConn = new \Muppets\Classes\Db();
$db = $dbConn->getDb();
$muppets = \Muppets\Classes\MuppetHydrator::retrieveAll($db);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Hyper Lynx's Muppets</title>
</head>
<body>

<header>
    <img src="assets/muppet_logo.png" />
</header>

<main>

</main>

<section class="muppetImageContainer">
    <img class="muppetImage" src="assets/muppets.png" />
</section>

</body>
</html>
