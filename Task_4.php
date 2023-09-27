<?php

function calculateAverageGrade($grades) {
    $totalMath = array_sum($grades['Math']);
    $totalEnglish = array_sum($grades['English']);
    $totalScience = array_sum($grades['Science']);
    
    $averageMath = $totalMath / count($grades['Math']);
    $averageEnglish = $totalEnglish / count($grades['English']);
    $averageScience = $totalScience / count($grades['Science']);
    
    $average = ($averageMath + $averageEnglish + $averageScience) / 3;
    
    if ($average >= 90) {
        return "A+";
    } elseif ($average >= 80) {
        return "A";
    } elseif ($average >= 70) {
        return "B";
    } else {
        return "C";
    }
}

$studentGrades = [
    'student_1' => [
        'Math' => [100, 90, 80],
        'English' => [95, 85, 75],
        'Science' => [92, 82, 72],
    ],
    'student_2' => [
        'Math' => [88, 78, 68],
        'English' => [91, 81, 71],
        'Science' => [87, 77, 67],
    ],
    'student_3' => [
        'Math' => [75, 65, 55],
        'English' => [80, 70, 60],
        'Science' => [78, 68, 58],
    ],
];

foreach ($studentGrades as $student => $grades) {
    $averageGrade = calculateAverageGrade($grades);
    echo "$student: $averageGrade\n";
}
?>

