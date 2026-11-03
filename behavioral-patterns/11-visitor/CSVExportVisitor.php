<?php
require_once __DIR__ . '/Visitor.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';

class CSVExportVisitor implements Visitor
{
    public function visitStudent(Student $student): void { echo "Student exported: " . $student->getName() . "\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Faculty exported: " . $faculty->getName() . "\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Alumni exported: " . $alumni->getName() . "\n"; }
}
