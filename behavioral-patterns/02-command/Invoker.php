<?php
require_once __DIR__ . '/Command.php';

class Invoker
{
    public function run(Command $command, string $label): void
    {
        echo "Executing: {$label}\n";
        $command->execute();
        echo "\n";
    }
}
