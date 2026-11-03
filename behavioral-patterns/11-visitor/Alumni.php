<?php
require_once __DIR__ . '/Element.php';
require_once __DIR__ . '/Visitor.php';

class Alumni implements Element
{
    public function __construct(private string $name) {}
    public function getName(): string { return $this->name; }
    public function accept(Visitor $visitor): void { $visitor->visitAlumni($this); }
}
