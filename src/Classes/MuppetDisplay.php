<?php

namespace Muppets\Classes;

/**
 *Displays all the muppets as a html string
 */
class MuppetDisplay {

    /**
     * Creates protected HTML string
     * @return string $muppetString
     */
    public static function displayMuppets(array $muppets): string
    {
        $muppetString = '';

        foreach ($muppets as $muppet){
            $muppetString .= "<article><img src='" . $muppet->getImg_Url() . "' alt='" . $muppet->getName() ."'/>"
                . "<div><h4>" . $muppet->getName() . "</h4>"
                . "<p>" . $muppet->getDebut_Year() . "</p>"
                . "</div></article>";
        }
        return $muppetString;
    }

}