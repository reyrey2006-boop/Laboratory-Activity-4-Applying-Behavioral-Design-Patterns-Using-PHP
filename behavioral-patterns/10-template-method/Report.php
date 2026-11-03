<?php
abstract class Report
{
    final public function generateReport(): void
    {
        $this->generateHeader();
        $this->retrieveData();
        $this->formatData();
        $this->generateFooter();
    }

    protected function generateHeader(): void
    {
        echo "======================== " . strtoupper($this->getTitle()) . " ========================\n";
    }
    abstract protected function getTitle(): string;
    abstract protected function retrieveData(): void;
    abstract protected function formatData(): void;
    protected function generateFooter(): void { echo "======================== END OF REPORT ========================\n"; }
}
