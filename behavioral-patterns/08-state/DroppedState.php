<?php
require_once __DIR__ . '/State.php';
require_once __DIR__ . '/Student.php';

class DroppedState implements State
{
    public function getName(): string { return 'Dropped'; }
    public function enroll(Student $student): void { echo "Dropped students must contact the Registrar before re-enrolling.\n"; }
}
