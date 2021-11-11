<?php

namespace Muppets\Classes;


class MuppetJumble
{
    public static function getRandomId(array $muppets)
    {
        shuffle($muppets);
        $randomId = $muppets[0]->getId();
        if ($randomId !== 0 && $randomId !== '') {
            return $randomId;
        } else {
            return '404 Muppet not found - you\'s a muppet!';
        }
    }

}