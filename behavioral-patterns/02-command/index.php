<?php
require_once __DIR__ . '/StudentSystem.php';
require_once __DIR__ . '/Invoker.php';
require_once __DIR__ . '/EnrollCommand.php';
require_once __DIR__ . '/DropSubjectCommand.php';
require_once __DIR__ . '/PrintRegistrationCommand.php';
require_once __DIR__ . '/LogoutCommand.php';

$system = new StudentSystem();
$invoker = new Invoker();

$invoker->run(new EnrollCommand($system), 'Enroll Student');
$invoker->run(new DropSubjectCommand($system), 'Drop Subject');
$invoker->run(new PrintRegistrationCommand($system), 'Print Registration');
$invoker->run(new LogoutCommand($system), 'Logout');
