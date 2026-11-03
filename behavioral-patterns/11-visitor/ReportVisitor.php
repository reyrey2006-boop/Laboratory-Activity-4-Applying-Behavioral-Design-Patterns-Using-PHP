<?php
require_once __DIR__ . '/Visitor.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';

class ReportVisitor implements Visitor
{
    public function visitStudent(Student $student): void { echo "Student report for " . $student->getName() . "\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Faculty report for " . $faculty->getName() . "\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Alumni report for " . $alumni->getName() . "\n"; }
}
