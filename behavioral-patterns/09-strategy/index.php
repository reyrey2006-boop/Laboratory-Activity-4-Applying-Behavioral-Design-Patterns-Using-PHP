<?php
require_once __DIR__ . '/GradeCalculator.php';
require_once __DIR__ . '/SimpleAverageStrategy.php';
require_once __DIR__ . '/WeightedAverageStrategy.php';
require_once __DIR__ . '/TransmutedGradeStrategy.php';

$grades = [85, 90, 95];
$calculator = new GradeCalculator(new SimpleAverageStrategy());
echo "Strategy: Simple Average\n";
echo "Result: " . number_format($calculator->calculate($grades), 2) . "\n\n";

$calculator->setStrategy(new WeightedAverageStrategy());
$weights = [20, 30, 50];
echo "Strategy: Weighted Average\n";
echo "Result: " . number_format($calculator->calculate($grades, $weights), 2) . "\n\n";

$calculator->setStrategy(new TransmutedGradeStrategy());
echo "Strategy: Transmuted Grade (illustrative formula)\n";
echo "Result: " . number_format($calculator->calculate($grades), 2) . "\n";
