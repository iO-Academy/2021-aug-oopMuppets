<?php

use Muppets\Classes\Db;
use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetHydrator;
use Muppets\Classes\MuppetSearch;

require_once 'vendor/autoload.php';
$errorInput = '';
$errorDb = '';
$muppetDisplay = '';

if (isset($_GET['searchInput'])){
    $searchInput = $_GET['searchInput'];
} else {
    header('Location: index.php');
}

if ($searchInput !== '') {
    $displaySearchInput = '<h2 class="searchTermPlaceholder" >Search Term: </h2><h2 class="searchResult" >' . $searchInput . '</h2>';
    } else {
    $displaySearchInput = '';
}

if (isset($_GET['error']) && $_GET['error'] === '1') {
    $errorDb = '404 Muppet not found - you\'s a muppet!';
}

$sanitizedSearchInput = MuppetSearch::sanitizeSearchInput($searchInput);
if ($sanitizedSearchInput === "Error - no input provided" ) {
    $errorInput = $sanitizedSearchInput;
} else if (MuppetSearch::validateSearchInput($sanitizedSearchInput)){
    $dbConn = new Db();
    $db = $dbConn->getDb();
    $muppets = MuppetHydrator::retrieveSearchQuery($db, $searchInput);
    $muppetDisplay = MuppetDisplay::displayMuppets($muppets);
} else {
    $errorInput = 'Please input a valid Muppet name that has fewer than 256 characters and no digits';
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

<header>
    <div class="content">
        <img class ="muppetLogo" src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo" />
        <div class="searchContainer">
            <form class ="searchForm" action="search.php">
                <input type="search" class="searchBar" placeholder="Search the Muppets" name="searchInput" />
                <button class="searchButton" type="submit">
                    <img class="searchIcon" src="assets/find.svg" alt="search button" />
                </button>
            </form>
        <div class="searchTermContainer" >
            <?= $displaySearchInput ?>
        </div>
    </div>
</header>

<div>
    <h1 class="error"><?= $errorInput ?></h1>
    <main>
        <?= $muppetDisplay ?>
    </main>

</div>

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>


