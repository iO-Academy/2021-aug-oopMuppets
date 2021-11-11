<?php

use Muppets\Classes\Db;
use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetHydrator;
use Muppets\Classes\MuppetJumble;

require_once 'vendor/autoload.php';

$dbConn = new Db();
$db = $dbConn->getDb();
$muppets = MuppetHydrator::retrieveAll($db);
$muppetDisplay = MuppetDisplay::displayMuppets($muppets);
$muppetJumbleId = MuppetJumble::getRandomId($muppets);

$error = '';
if (isset($_GET['error']) && $_GET['error'] === '1') {
    $error = '404 Muppet not found - you\'s a muppet!';
}
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
<div class="content">
    <header>
        <a href="index.php">
            <img class ="muppetLogo" src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo" />
        </a>
        <div class="searchContainer">
            <form class ="searchForm" action="search.php">
                <input type="search" class="searchBar" placeholder="Search the Muppets" name="searchInput" />
                <button class="searchButton" type="submit">
                    <img class="searchIcon" src="assets/find.svg" />
                </button>
            </form>
        </div>
    </header>

    <div>
        <h1 class="error"><?= $error ?></h1>
    </div>

    <main>
        <article><img class='randomImage' src='assets/randomMuppet.png' alt='random muppet' />
            <div>
                <h4>Random Muppet</h4>
                <p>1936-1996</p>
            </div>
            <a class='button' href='details.php?muppetId=<?= $muppetJumbleId; ?>'>Muppet Jumble!</a>
        </article>
        <?php echo $muppetDisplay;?>
    </main>
</div>

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>
