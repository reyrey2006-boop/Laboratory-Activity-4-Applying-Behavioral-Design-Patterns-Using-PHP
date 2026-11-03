<?php
require_once __DIR__ . '/AbstractHandler.php';

class RegistrarHandler extends AbstractHandler
{
    public function handle(StudentRequest $request): void
    {
        $type = $request->getType();
        if (in_array($type, ['Certificate of Enrollment', 'Transcript of Records'], true)) {
            echo "Registrar: Processing {$type}...\n";
        } else {
            echo "Registrar: Cannot process request.\n";
            $this->passToNext($request);
        }
    }
}
