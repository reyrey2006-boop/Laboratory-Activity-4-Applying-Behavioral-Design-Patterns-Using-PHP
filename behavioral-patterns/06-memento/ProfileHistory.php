<?php
require_once __DIR__ . '/StudentProfileMemento.php';

class ProfileHistory
{
    private array $history = [];
    public function push(StudentProfileMemento $memento): void { $this->history[] = $memento; }
    public function pop(): ?StudentProfileMemento { return array_pop($this->history); }
}
