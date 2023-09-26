<?php

// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

// Convert the string to all lowercase.
// Replace "brown" with "red" in the string.
// Print the modified text.

$text = "The quick brown fox jumps over the lazy dog.";

function task( $n ) {
    $result = strtolower( $n );

    $resultMod = str_replace( "brown", "red", $result );

    return $resultMod;
}

echo task( $text );