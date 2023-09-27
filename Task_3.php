<?php
function sortGradesDescending($grades) {
    // Sort the grades in descending order
    rsort($grades);

    // Print the sorted grades
    print_r($grades);
}

// Create the $grades array with the given values
$grades = [85, 92, 78, 88, 95];

// Call the function with the $grades array
sortGradesDescending($grades);