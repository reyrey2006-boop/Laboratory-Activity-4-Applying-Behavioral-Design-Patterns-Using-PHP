<?php
interface State
{
    public function getName(): string;
    public function enroll(Student $student): void;
}
