<?php
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';
require_once __DIR__ . '/CSVExportVisitor.php';
require_once __DIR__ . '/ReportVisitor.php';
require_once __DIR__ . '/StatisticsVisitor.php';
require_once __DIR__ . '/PDFReportVisitor.php';

$records = [new Student('Juan'), new Faculty('Ms. Santos'), new Alumni('Maria')];

echo "CSV Export Visitor\n";
$csv = new CSVExportVisitor();
foreach ($records as $record) { $record->accept($csv); }

echo "\nReport Visitor\n";
$report = new ReportVisitor();
foreach ($records as $record) { $record->accept($report); }

echo "\nStatistics Visitor\n";
$statistics = new StatisticsVisitor();
foreach ($records as $record) { $record->accept($statistics); }

echo "\nPDF Report Visitor (demonstration only)\n";
$pdf = new PDFReportVisitor();
foreach ($records as $record) { $record->accept($pdf); }
