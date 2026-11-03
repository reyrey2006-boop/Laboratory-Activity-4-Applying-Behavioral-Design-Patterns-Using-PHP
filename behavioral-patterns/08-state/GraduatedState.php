<?php
require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';

class GraduatedState implements State
{
    public function getName(): string { return 'Graduated'; }
    public function enroll(Student $student): void { echo "Graduated students cannot enroll as current students.\n"; }
}
