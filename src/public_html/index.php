<?php
require_once __DIR__ . '/Dispatcher.php';
$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot(__DIR__ . '/..');
$dispatcher->dispatch();
