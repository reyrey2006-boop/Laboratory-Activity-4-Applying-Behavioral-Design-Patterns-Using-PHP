<?php
require_once __DIR__ . '/StudentContext.php';
interface Expression { public function interpret(StudentContext $context): bool; }
