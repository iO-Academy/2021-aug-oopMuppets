<?php

use Muppets\Classes\MuppetDisplay;
require_once 'vendor/autoload.php';

$muppets = [
        ['id' => 1,
    'name' => 'Miss Piggy',
    'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
    'debut_year' => 1986,
    'mayhem' => 50,
    'glamour' => 20,
    'humour' => 5,
    'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10],
    ['id' => 1,
        'name' => 'Miss Piggy',
        'img_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/22/MissPiggy.jpg/220px-MissPiggy.jpg',
        'debut_year' => 1986,
        'mayhem' => 50,
        'glamour' => 20,
        'humour' => 5,
        'hall_of_fame' => 10]
];

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
