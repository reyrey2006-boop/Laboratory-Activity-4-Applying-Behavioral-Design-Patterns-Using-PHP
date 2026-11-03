<?php
require_once __DIR__ . '/Mediator.php';

class Student
{
    public function __construct(private string $name, private Mediator $mediator) {}
    public function getName(): string { return $this->name; }
    public function sendMessage(string $message): void { $this->mediator->send($message, $this); }
    public function receiveMessage(string $message): void
    {
        echo $this->name . " receives:\n" . $message . "\n\n";
    }
}
