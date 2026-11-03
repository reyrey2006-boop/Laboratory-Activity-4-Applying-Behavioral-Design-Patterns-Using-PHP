<?php
require_once __DIR__ . '/Report.php';

class GradeReport extends Report
{
    protected function getTitle(): string { return 'Grade Report'; }
    protected function retrieveData(): void { echo "Retrieving grade data...\n"; }
    protected function formatData(): void { echo "Subject: OOP\nGrade: 1.75\n"; }
}
