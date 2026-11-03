<?php
require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/PreAssessedState.php';

class ApplicantState implements State
{
    public function getName(): string { return 'Applicant'; }
    public function enroll(Student $student): void
    {
        echo "Student must complete pre-assessment first.\n";
    }
}
