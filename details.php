<?php

use Muppets\Classes\Db;
use Muppets\Classes\MuppetHydrator;

require_once 'vendor/autoload.php';

$dbConn = new Db();
$db = $dbConn->getDb();
$muppets = MuppetHydrator::retrieveAll($db);

?>

<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="styles.css" />
<!--    Put name of current muppet here-->
    <title>INSET getName() OF MUPPET</title>
</head>

<body>

<header>
    <img src="assets/muppet_logo.png" alt="Hyper Lynx Muppet Logo" />
</header>

<main>
<?php ?>
</main>

<section>
    <img src="assets/muppets.png" alt="All the muppets" />
</section>

</body>
</html>
