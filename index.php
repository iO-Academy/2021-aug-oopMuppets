<?php

use Muppets\Classes\MuppetDisplay;
require_once 'vendor/autoload.php';

$dbConn = new \Muppets\Classes\Db();
$db = $dbConn->getDb();
$muppets = \Muppets\Classes\MuppetHydrator::retrieveAll($db);
$muppetDisplay = new MuppetDisplay($muppets);

?>

<html lang="en-GB">
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
    <img src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo"/>
</header>

<main>
    <?php echo $muppetDisplay->getMuppetString(); ?>
</main>

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>
