<?php
class StudentProfileMemento
{
    public function __construct(
        private string $name,
        private string $program,
        private int $year,
        private string $email
    ) {}
    public function getState(): array
    {
        return ['name'=>$this->name, 'program'=>$this->program, 'year'=>$this->year, 'email'=>$this->email];
    }
}
