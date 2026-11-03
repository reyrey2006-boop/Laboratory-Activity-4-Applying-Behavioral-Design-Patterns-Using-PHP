<?php
require_once __DIR__ . '/Observer.php';

class GradeSystem
{
    private array $observers = [];
    public function attach(Observer $observer): void { $this->observers[] = $observer; }
    public function setGrade(float $grade): void
    {
        echo "Grade updated: " . number_format($grade, 2) . "\n\n";
        foreach ($this->observers as $observer) {
            $observer->update($grade);
        }
    }
}
