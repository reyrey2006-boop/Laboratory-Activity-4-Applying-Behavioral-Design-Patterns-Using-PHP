<?php
interface Handler
{
    public function setNext(?Handler $handler): ?Handler;
    public function handle(StudentRequest $request): void;
}
