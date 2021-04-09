<?php declare(strict_types = 1);

// run this file via CLI to test

use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';
Debugger::enable(Debugger::DEVELOPMENT);
dd('dump working');