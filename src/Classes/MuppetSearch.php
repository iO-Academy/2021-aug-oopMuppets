<?php

namespace Muppets\Classes;

class MuppetSearch {
    /**
     * This method takes user input and removes any html special characters
     *
     * @param string $searchInput User input to be sanitized
     *
     * @return string returns sanitized string
     */
    public static function sanitizeSearchInput(string $searchInput) : string
    {
        if ($searchInput) {
            return filter_var($searchInput, FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            return "Error - no input provided";
        }
    }

    /**
     * Method validates sanitized input to boolean.
     * Rejects any numbers, strings with only whitespace and string length of over 255.
     *
     * @param string $sanitizedSearchInput takes sanitized input
     *
     * @return bool If user input passes validation will return true.
     */
    public static function validateSearchInput(string $sanitizedSearchInput) : bool
    {
        if (!preg_match('/[\d]+/', $sanitizedSearchInput)
            && preg_match('/[\S]/', $sanitizedSearchInput)
            && strlen($sanitizedSearchInput) <= 255) {
                return true;
            } else {
                return false;
            }
        }
}