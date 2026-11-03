<?php
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/ApplicantState.php';
require_once __DIR__ . '/PreAssessedState.php';

$student = new Student(new ApplicantState());
echo "Current State: " . $student->getStateName() . "\nAction: Enroll\n";
$student->enroll();

echo "\nChanging state to Pre-Assessed...\n";
$student->setState(new PreAssessedState());
echo "Current State: " . $student->getStateName() . "\nAction: Enroll\n";
$student->enroll();
echo "New State: " . $student->getStateName() . "\n";
