<?php
require_once __DIR__ . '/Observer.php';

class EmailNotification implements Observer
{
    public function update(float $grade): void
    {
        echo "Email Notification:\nYour grade has been updated.\n\n";
    }
}
