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
            return '<h1 class="error">:( All the muppets have gone out</h1>';
        }
        $muppetString = "<article><img class='randomImage' src='assets/randomMuppet.png' alt='random muppet' />"
            . "<div><h4>Random Muppet</h4><p>1936-1996</p></div>"
            . "<a class='button' href='details.php?muppetId=" . MuppetJumble::getRandomId($muppets) . "'>Muppet Jumble!</a>"
            . "</article>";

        foreach ($muppets as $muppet) {
            $muppetString .= "<article><img src='" . $muppet->getImgUrl() . "' alt='" . $muppet->getName() ."'/>"
                . "<div><h4>" . $muppet->getName() . "</h4>"
                . "<p>" . $muppet->getDebutYear() . "</p>"
                . "</div>"
                . "<a class='button' href='details.php?muppetId=". $muppet->getId() . "'>Check me out!</a>"
                . "</article>";
        }
        return $muppetString;
    }

    public static function displayMuppetDetails(array $muppet) : string
    {
        if (!count($muppet)) {
            return '<h1 class="error">:( This muppet seems to have gone out!</h1>';
        }
        if(count($muppet)>1) {
            return '<h1 class="error">:( Too many muppets are trying to have a party!</h1>';
        }
        $singleMuppetString = "<section class='muppetDetails'>"
            . "<img src='" . $muppet[0]->getImgUrl() . "' alt='" . $muppet[0]->getName() ."'/>"
            . "<div><h1>" . $muppet[0]->getName() . "</h1>"
            . "<ul><li>Debut Year: <span class='muppetAttribute'>" . $muppet[0]->getDebutYear() . "</span></li>"
            . "<li>Mayhem: <span class='muppetAttribute'>" . $muppet[0]->getMayhem() . "</span><span class='outOf'>/50</span></li>"
            . "<li>Glamour: <span class='muppetAttribute'>" . $muppet[0]->getGlamour() . "</span><span class='outOf'>/20</span></li>"
            . "<li>Hall of Fame: <span class='muppetAttribute'>" . $muppet[0]->getHallOfFame() . "</span><span class='outOf'>/10</span></li>"
            . "<li>Humour: <span class='muppetAttribute'>" . $muppet[0]->getHumour() . "</span><span class='outOf'>/5</span></li></ul></div></section>"
            . "<form method='get' action='index.php'>"
            . "<button class='button' type='submit'>Home</button>"
            . "</form>";
        return $singleMuppetString;
    }
}




