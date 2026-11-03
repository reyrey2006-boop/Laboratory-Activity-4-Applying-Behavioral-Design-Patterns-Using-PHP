<?php
require_once __DIR__ . '/AbstractHandler.php';

class StudentAffairsHandler extends AbstractHandler
{
    public function handle(StudentRequest $request): void
    {
        $type = $request->getType();
        if (in_array($type, ['Good Moral Certificate'], true)) {
            echo "Student Affairs: Processing {$type}...\n";
        } else {
            echo "Student Affairs: Cannot process request.\n";
            $this->passToNext($request);
        }
    }
}
