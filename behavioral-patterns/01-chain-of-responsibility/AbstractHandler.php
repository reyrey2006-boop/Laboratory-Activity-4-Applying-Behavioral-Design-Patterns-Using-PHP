<?php
require_once __DIR__ . '/Handler.php';
require_once __DIR__ . '/StudentRequest.php';

abstract class AbstractHandler implements Handler
{
    protected ?Handler $nextHandler = null;

    public function setNext(?Handler $handler): ?Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    protected function passToNext(StudentRequest $request): void
    {
        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($request);
        } else {
            echo "No office can process this request.\n";
        }
    }
}
