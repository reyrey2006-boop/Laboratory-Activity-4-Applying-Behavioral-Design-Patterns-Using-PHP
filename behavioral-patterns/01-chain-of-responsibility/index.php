<?php
require_once __DIR__ . '/StudentRequest.php';
require_once __DIR__ . '/StudentAffairsHandler.php';
require_once __DIR__ . '/RegistrarHandler.php';
require_once __DIR__ . '/FinanceHandler.php';
require_once __DIR__ . '/ICTHandler.php';

$studentAffairs = new StudentAffairsHandler();
$registrar = new RegistrarHandler();
$finance = new FinanceHandler();
$ict = new ICTHandler();

$studentAffairs->setNext($registrar);
$registrar->setNext($finance);
$finance->setNext($ict);

$request = new StudentRequest('Transcript of Records');
echo "Request: " . $request->getType() . "\n";
$studentAffairs->handle($request);
