<?php
require_once __DIR__ . '/AbstractHandler.php';

class FinanceHandler extends AbstractHandler
{
    public function handle(StudentRequest $request): void
    {
        $type = $request->getType();
        if (in_array($type, ['Payment Concern'], true)) {
            echo "Finance: Processing {$type}...\n";
        } else {
            echo "Finance: Cannot process request.\n";
            $this->passToNext($request);
        }
    }
}
