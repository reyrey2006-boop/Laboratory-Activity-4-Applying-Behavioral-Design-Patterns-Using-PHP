<?php
require_once __DIR__ . '/Observer.php';

class ParentNotification implements Observer
{
    public function update(float $grade): void
    {
        echo "Parent Notification:\nStudent grade has been posted.\n\n";
    }
}
