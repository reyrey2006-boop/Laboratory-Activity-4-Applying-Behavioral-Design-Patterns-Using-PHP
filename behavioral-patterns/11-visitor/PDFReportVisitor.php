<?php
require_once __DIR__ . '/Visitor.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';

class PDFReportVisitor implements Visitor
{
    // Demonstration only: this prints PDF-report content; it does not create a real PDF file.
    public function visitStudent(Student $student): void { echo "[PDF report content] Student: " . $student->getName() . "\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "[PDF report content] Faculty: " . $faculty->getName() . "\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "[PDF report content] Alumni: " . $alumni->getName() . "\n"; }
}
