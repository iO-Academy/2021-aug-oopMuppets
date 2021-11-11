<?php

use Muppets\Classes\Db;
use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetHydrator;

require_once 'vendor/autoload.php';
$searchQuery = $_GET['searchInput'];


if ($searchQuery !== '') {
    $displaysearchQuery = '<h2 class="searchTermPlaceholder" >Search Term: </h2><h2 class="searchResult" >' . $searchQuery . '</h2>';
}  else {
    $displaysearchQuery = '';
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
    <img class ="muppetLogo" src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo" />
    <div class="searchContainer">
        <form class ="searchForm" action="search.php">
            <input type="search" class="searchBar" placeholder="Search the Muppets" name="searchInput" />
            <button class="searchButton" type="submit">
                <img class="searchIcon" src="assets/find.svg" />
            </button>
        </form>
        <div class="searchTermContainer" >
            <?php echo $displaysearchQuery?>
        </div>
    </div>
</header>

<!--<div>-->
<!--    <h1 class="error">--><?//= $error ?><!--</h1>-->
<!--</div>-->

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>

