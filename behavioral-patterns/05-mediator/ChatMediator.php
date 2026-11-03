<?php
require_once __DIR__ . '/Mediator.php';
require_once __DIR__ . '/Student.php';

class ChatMediator implements Mediator
{
    private array $students = [];
    public function register(Student $student): void { $this->students[] = $student; }

    public function send(string $message, Student $sender): void
    {
        $formatted = $sender->getName() . ': ' . $message;
        echo $formatted . "\n\n";
        foreach ($this->students as $student) {
            if ($student !== $sender) {
                $student->receiveMessage($formatted);
            }
        }
    }
}
