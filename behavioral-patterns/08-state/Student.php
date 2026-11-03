<?php
require_once __DIR__ . '/State.php';

class Student
{
    public function __construct(private State $state) {}
    public function setState(State $state): void { $this->state = $state; }
    public function getStateName(): string { return $this->state->getName(); }
    public function enroll(): void { $this->state->enroll($this); }
}
