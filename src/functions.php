<?php
/*
| ---------------------------------------------------------------------------
| Define helper functions
| ---------------------------------------------------------------------------
*/


/**
 * fetch variables from the .env file
 */
if (! function_exists('env')) {
    function env(String $var, $default = ''): String {
        return $_ENV[$var] ?? $default;
    }
}
