<?php
require_once __DIR__ . '/GradeSystem.php';
require_once __DIR__ . '/StudentPortal.php';
require_once __DIR__ . '/EmailNotification.php';
require_once __DIR__ . '/ParentNotification.php';

$grades = new GradeSystem();
$grades->attach(new StudentPortal());
$grades->attach(new EmailNotification());
$grades->attach(new ParentNotification());
$grades->setGrade(1.75);
