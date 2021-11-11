<?php

namespace Muppets\Classes;


class MuppetJumble
{
    public static function getRandomId(array $muppets) : int
    {
        shuffle($muppets);
        return $muppets[0]->getId();
    }

}