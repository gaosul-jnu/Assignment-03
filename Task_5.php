<?php
function generatePassword($length) {
    // Define the character sets
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    // Combine all character sets
    $characters = $lowercase . $uppercase . $numbers . $specialChars;

    // Get the total number of characters
    $charLength = strlen($characters);

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charLength - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

// Generate a 12-character random password
$length = 12;
$password = generatePassword($length);

// Print the generated password
echo "Generated Password: $password";