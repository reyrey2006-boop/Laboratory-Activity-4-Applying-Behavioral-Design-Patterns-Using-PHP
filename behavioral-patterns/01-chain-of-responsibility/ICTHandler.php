<?php
require_once __DIR__ . '/AbstractHandler.php';

class ICTHandler extends AbstractHandler
{
    public function handle(StudentRequest $request): void
    {
        $type = $request->getType();
        if (in_array($type, ['Student ID Concern'], true)) {
            echo "ICT: Processing {$type}...\n";
        } else {
            echo "ICT: Cannot process request.\n";
            $this->passToNext($request);
        }
    }
}
