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
        if (!count($muppet)) {
            return '<h1>:( This muppet seems to have gone out!</h1>';
        }
        if(count($muppet)>1) {
            return '<h1>:( Too many muppets are trying to have a party!</h1>';
        }

        $singleMuppetString = "<section class='muppetDetails'>"
            . "<img src='" . $muppet[0]->getImgUrl() . "' alt='" . $muppet[0]->getName() ."'/>"
            . "<div><h1>" . $muppet[0]->getName() . "</h1>"
            . "<ul><li>Debut Year: " . $muppet[0]->getDebutYear() . "</li>"
            . "<li>Mayhem: " . $muppet[0]->getMayhem() . "/50</li>"
            . "<li>Glamour: " . $muppet[0]->getGlamour() . "/20</li>"
            . "<li>Hall of Fame: " . $muppet[0]->getHallOfFame() . "/10</li>"
            . "<li>Humour: " . $muppet[0]->getHumour() . "/5</li></ul></div></section>"
            . "<form method='get' action='/index.php'>"
            . "<button type='submit'>Home</button>"
            . "</form>";

        return $singleMuppetString;
    }
}




