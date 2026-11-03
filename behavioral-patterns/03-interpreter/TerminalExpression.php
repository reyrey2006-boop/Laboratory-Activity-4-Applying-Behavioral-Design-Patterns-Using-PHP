<?php
require_once __DIR__ . '/Expression.php';

class TerminalExpression implements Expression
{
    public function __construct(private string $field, private string|int $expected) {}

    public function interpret(StudentContext $context): bool
    {
        return match ($this->field) {
            'PROGRAM' => $context->program === (string)$this->expected,
            'YEAR' => $context->year === (int)$this->expected,
            default => false,
        };
    }
}
