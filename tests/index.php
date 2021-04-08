<?php

use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';
Debugger::enable(Debugger::DEVELOPMENT);
dd('dump working');