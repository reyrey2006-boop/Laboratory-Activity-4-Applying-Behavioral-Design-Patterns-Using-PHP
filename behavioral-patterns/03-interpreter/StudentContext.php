<?php
class StudentContext
{
    public function __construct(
        public string $program,
        public int $year
    ) {}
}
