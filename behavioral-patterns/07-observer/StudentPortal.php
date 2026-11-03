<?php
require_once __DIR__ . '/Observer.php';

class StudentPortal implements Observer
{
    public function update(float $grade): void
    {
        echo "Student Portal:\nNew grade posted.\n\n";
    }
}
