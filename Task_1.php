<?php
function modifyText($text) {
    // Step 1: Convert the string to all lowercase
    $lowercaseText = strtolower($text);

    // Step 2: Replace "brown" with "red" in the string
    $modifiedText = str_replace('brown', 'red', $lowercaseText);

    // Step 3: Print the modified text
    echo $modifiedText;
}

// Define the original text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the original text
modifyText($text);

