<?php
require_once __DIR__ . '/Visitor.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';

class StatisticsVisitor implements Visitor
{
    public function visitStudent(Student $student): void { echo "Statistics counted Student: " . $student->getName() . "\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Statistics counted Faculty: " . $faculty->getName() . "\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Statistics counted Alumni: " . $alumni->getName() . "\n"; }
}
