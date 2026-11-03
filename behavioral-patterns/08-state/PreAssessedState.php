<?php
require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/EnrolledState.php';

class PreAssessedState implements State
{
    public function getName(): string { return 'Pre-Assessed'; }
    public function enroll(Student $student): void
    {
        echo "Student successfully enrolled.\n";
        $student->setState(new EnrolledState());
    }
}
