<?php

use JVitasek\DumpAndDie\Dumper;
use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';
Debugger::enable(Debugger::DEVELOPMENT);
Dumper::dd('dump working');