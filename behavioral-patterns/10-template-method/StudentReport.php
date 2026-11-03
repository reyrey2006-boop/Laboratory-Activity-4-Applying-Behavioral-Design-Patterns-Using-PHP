<?php
require_once __DIR__ . '/Report.php';

class StudentReport extends Report
{
    protected function getTitle(): string { return 'Student Report'; }
    protected function retrieveData(): void { echo "Retrieving student data...\n"; }
    protected function formatData(): void
    {
        echo "Student ID: 2026-001\nName: Juan Dela Cruz\nProgram: BSIT\n";
    }
}
