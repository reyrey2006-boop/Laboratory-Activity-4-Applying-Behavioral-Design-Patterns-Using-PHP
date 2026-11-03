<?php
require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';

class PrintRegistrationCommand implements Command
{
    public function __construct(private StudentSystem $system) {}
    public function execute(): void { $this->system->printRegistration(); }
}
