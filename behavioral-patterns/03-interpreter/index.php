<?php
require_once __DIR__ . '/StudentContext.php';
require_once __DIR__ . '/TerminalExpression.php';
require_once __DIR__ . '/AndExpression.php';
require_once __DIR__ . '/OrExpression.php';

$student = new StudentContext('BSIT', 4);
$programIsBSIT = new TerminalExpression('PROGRAM', 'BSIT');
$yearIs4 = new TerminalExpression('YEAR', 4);
$programIsBSCS = new TerminalExpression('PROGRAM', 'BSCS');

$andQuery = new AndExpression($programIsBSIT, $yearIs4);
$orQuery = new OrExpression($programIsBSIT, $programIsBSCS);

echo "Expression: PROGRAM = \"BSIT\" AND YEAR = 4\n";
echo "Result: " . ($andQuery->interpret($student) ? 'TRUE' : 'FALSE') . "\n\n";
echo "Expression: PROGRAM = \"BSIT\" OR PROGRAM = \"BSCS\"\n";
echo "Result: " . ($orQuery->interpret($student) ? 'TRUE' : 'FALSE') . "\n";
