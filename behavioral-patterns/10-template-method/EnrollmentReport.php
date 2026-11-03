<?php
require_once __DIR__ . '/Report.php';

class EnrollmentReport extends Report
{
    protected function getTitle(): string { return 'Enrollment Report'; }
    protected function retrieveData(): void { echo "Retrieving enrollment data...\n"; }
    protected function formatData(): void { echo "Student ID: 2026-001\nStatus: Enrolled\n"; }
}
