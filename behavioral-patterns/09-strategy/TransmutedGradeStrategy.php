<?php
require_once __DIR__ . '/GradeStrategy.php';

class TransmutedGradeStrategy implements GradeStrategy
{
    public function calculate(array $grades, array $weights = []): float
    {
        if (count($grades) === 0) { throw new InvalidArgumentException('At least one grade is required.'); }
        $average = array_sum($grades) / count($grades);
        return min(100, max(0, 50 + ($average / 2)));
    }
}
