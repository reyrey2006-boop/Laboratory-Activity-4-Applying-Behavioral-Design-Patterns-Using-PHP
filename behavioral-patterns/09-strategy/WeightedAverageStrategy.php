<?php
require_once __DIR__ . '/GradeStrategy.php';

class WeightedAverageStrategy implements GradeStrategy
{
    public function calculate(array $grades, array $weights = []): float
    {
        if (count($grades) === 0 || count($grades) !== count($weights)) {
            throw new InvalidArgumentException('Each grade must have a matching weight.');
        }
        $totalWeight = array_sum($weights);
        if ($totalWeight <= 0) { throw new InvalidArgumentException('Total weight must be greater than zero.'); }
        $weightedTotal = 0;
        foreach ($grades as $index => $grade) {
            if ($weights[$index] < 0) { throw new InvalidArgumentException('Weights cannot be negative.'); }
            $weightedTotal += $grade * $weights[$index];
        }
        return $weightedTotal / $totalWeight;
    }
}
