<?php

namespace Muppets\Classes;

class MuppetSearch {
    private $searchInput;
    private $sanitizedSearchInput;

    public static function populateSearchInput()
    {
        if ($_GET['searchInput']) {
            self::$searchInput = $_GET['searchInput'];
        }
    }

    public static function getSanitizedSearchInput()
    {
        return self::$sanitizedSearchInput;
    }

    public static function sanitizeSearchInput(string $searchInput) : string
    {
        return self::$sanitizedSearchInput = filter_var($searchInput, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public static function validateSearchInput(string $sanitizedSearchInput) : bool
    {
        if (gettype($sanitizedSearchInput) !== ('integer' || 'float')
            && strlen($sanitizedSearchInput) <= 255 ) {
            //wb numbers in strings??
            return true;
        } else {
            return false;
        }
    }
}

//is it actually doing something
//doc blocks
//unit testing x9