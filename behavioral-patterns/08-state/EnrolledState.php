<?php
require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';

class EnrolledState implements State
{
    public function getName(): string { return 'Enrolled'; }
    public function enroll(Student $student): void { echo "Student is already enrolled.\n"; }
}
