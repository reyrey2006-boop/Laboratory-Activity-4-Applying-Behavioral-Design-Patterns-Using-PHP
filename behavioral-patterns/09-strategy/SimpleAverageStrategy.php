<?php
require_once __DIR__ . '/GradeStrategy.php';

class SimpleAverageStrategy implements GradeStrategy
{
    public function calculate(array $grades, array $weights = []): float
    {
        if (count($grades) === 0) { throw new InvalidArgumentException('At least one grade is required.'); }
        return array_sum($grades) / count($grades);
    }
}
