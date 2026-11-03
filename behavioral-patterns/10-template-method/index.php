<?php
require_once __DIR__ . '/StudentReport.php';
require_once __DIR__ . '/GradeReport.php';
require_once __DIR__ . '/EnrollmentReport.php';

$reports = [new StudentReport(), new GradeReport(), new EnrollmentReport()];
foreach ($reports as $report) {
    $report->generateReport();
    echo "\n";
}
