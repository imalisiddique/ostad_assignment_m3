<?php

// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    "student 1" => ["Match" => 95, "English" => 65, "Science" => 95],
    "student 2" => ["Match" => 65, "English" => 75, "Science" => 85],
    "student 3" => ["Match" => 42, "English" => 30, "Science" => 25],
];

function calculateGrade( $param ) {

    foreach ( $param as $student => $grades ) {

        $total = array_sum( $grades );
        $count = count( $grades );
        $average = (int) ( $total / $count );

        if ( $average >= 80 && $average <= 100 ) {
            echo "$student has $average grade A+ \n";
        } elseif ( $average >= 70 && $average <= 79 ) {
            echo "$student has $average grade A \n";
        } elseif ( $average >= 60 && $average <= 69 ) {
            echo "$student has $average grade B \n";
        } elseif ( $average >= 50 && $average <= 59 ) {
            echo "$student has $average grade C \n";
        } elseif ( $average >= 33 && $average <= 49 ) {
            echo "$student has $average grade D \n";
        } elseif ( $average <= 32 ) {
            echo "$student has $average grade F \n";
        }

    }
}

print_r( calculateGrade( $studentGrades ) );