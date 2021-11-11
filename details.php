<?php

use Muppets\Classes\Db;
use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetHydrator;

require_once 'vendor/autoload.php';
if (isset($_GET['muppetId']) && preg_match('/^[1-9]+[0-9]?$/', $_GET['muppetId'])) {
    $dbConn = new Db();
    $db = $dbConn->getDb();
    $muppet = MuppetHydrator::getMuppetDetails($db, $_GET['muppetId']);
    $muppetDisplayDetails = MuppetDisplay::displayMuppetDetails($muppet);
} else {
    header('Location: index.php?error=1');
}

$muppetName = '';
if (count($muppet)) {
    $muppetName = $muppet[0]->getName();
} else {
    header('Location: index.php?error=1');
}
?>

<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="styles.css" />
    <title><?= $muppetName ?></title>
</head>

<body>
<div class="content">
    <header>
        <a href="index.php">
            <img class ="muppetLogo" src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo" />
        </a>
    </header>

    <main>
    <?php echo $muppetDisplayDetails?>
    </main>
</div>

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>
