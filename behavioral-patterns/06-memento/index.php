<?php
require_once __DIR__ . '/StudentProfile.php';
require_once __DIR__ . '/ProfileHistory.php';

$profile = new StudentProfile('Juan Dela Cruz', 'BSIT', 3, 'juan@example.com');
$history = new ProfileHistory();

$history->push($profile->save());
$profile->setProgram('BSCS');
$profile->setYear(4);

echo "Current Profile:\n";
$profile->display();

echo "\nUndo...\n\n";
$previous = $history->pop();
if ($previous !== null) {
    $profile->restore($previous);
}

echo "Restored Profile:\n";
$profile->display();
