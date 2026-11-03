<?php
interface Mediator
{
    public function register(Student $student): void;
    public function send(string $message, Student $sender): void;
}
