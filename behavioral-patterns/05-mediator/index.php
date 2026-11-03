<?php
require_once __DIR__ . '/ChatMediator.php';

$chat = new ChatMediator();
$juan = new Student('Juan', $chat);
$maria = new Student('Maria', $chat);
$pedro = new Student('Pedro', $chat);

$chat->register($juan);
$chat->register($maria);
$chat->register($pedro);

$juan->sendMessage('Hello everyone!');
