<?php
require_once __DIR__ . '/StudentProfileMemento.php';

class StudentProfile
{
    public function __construct(
        private string $name,
        private string $program,
        private int $year,
        private string $email
    ) {}

    public function setProgram(string $program): void { $this->program = $program; }
    public function setYear(int $year): void { $this->year = $year; }

    public function save(): StudentProfileMemento
    {
        return new StudentProfileMemento($this->name, $this->program, $this->year, $this->email);
    }

    public function restore(StudentProfileMemento $memento): void
    {
        $state = $memento->getState();
        $this->name = $state['name'];
        $this->program = $state['program'];
        $this->year = $state['year'];
        $this->email = $state['email'];
    }

    public function display(): void
    {
        echo "Name: {$this->name}\nProgram: {$this->program}\nYear: {$this->year}\nEmail: {$this->email}\n";
    }
}
