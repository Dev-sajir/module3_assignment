<?php
/*
Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student
*/

function calculateStudentGrades($studentGrades) {

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        // Calculate letter grade based on the average

        if ($average >= 90) {
            $letterGrade = 'A';
        } elseif ($average >= 80) {
            $letterGrade = 'B';
        } elseif ($average >= 70) {
            $letterGrade = 'C';
        } elseif ($average >= 60) {
            $letterGrade = 'D';
        } else {
            $letterGrade = 'F';
        }
        
        // save results in new array

        $results[$student] = array(
            'average' => $average,
            'letter_grade' => $letterGrade,
        );
    }

    /*

    // if you want to see the data in browser

    foreach ($results as $student => $data) {
    echo "$student Average Grade: {$data['average']}, Letter Grade: {$data['letter_grade']}\n <br>";
   } 
   
   */

   return $results ;
}


$studentGrades = array(
    'Rofik' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Rohim' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Maya' => array('Math' => 76, 'English' => 84, 'Science' => 89),
);


print_r(calculateStudentGrades($studentGrades));




