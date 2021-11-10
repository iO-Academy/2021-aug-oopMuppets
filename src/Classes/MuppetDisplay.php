<?php

namespace Muppets\Classes;

/**
 *Displays all the muppets as a html string
 */
class MuppetDisplay
{

    /**
     * Creates protected HTML string
     * @return string $muppetString
     */
    public static function displayMuppets(array $muppets): string
    {
        if (!count($muppets)) {
            return '<h1>:( All the muppets have gone out</h1>';
        }
        $muppetString = '';

        foreach ($muppets as $muppet) {
            $muppetString .= "<article><img src='" . $muppet->getImgUrl() . "' alt='" . $muppet->getName() ."'/>"
                . "<div><h4>" . $muppet->getName() . "</h4>"
                . "<p>" . $muppet->getDebutYear() . "</p>"
                . "</div></article>";
        }
        return $muppetString;
    }

    public static function displayMuppetDetails(array $muppet) : string
    {
        $singleMuppetString = "<section class='muppetDetails'>"
            . "<img src='" . $muppet->getImgUrl() . "' alt='" . $muppet->getName() ."'/>"
            . "<div><h1>" . $muppet->getName() . "</h1>"
            . "<ul><li>Debut Year: " . $muppet->getDebutYear() . "</li>"
            . "<li>Mayhem: " . $muppet->getMayhem() . "/50</li>"
            . "<li>Glamour: " . $muppet->getGlamour() . "/20</li>"
            . "<li>Hall of Fame: " . $muppet->getHallOfFame() . "/10</li>"
            . "<li>Humour: " . $muppet->getHumour() . "/5</li></ul></div></section>"
            . "<form method='get' action='/index.php'>"
            . "<button type='submit'>Home</button>"
            . "</form>";

        return $singleMuppetString;
    }
}




