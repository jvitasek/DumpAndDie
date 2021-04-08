<?php declare(strict_types = 1);

use Tracy\Debugger;

if (!function_exists('dd')) {
	function dd(...$args): void
	{
		foreach ($args as $x) {
			Debugger::barDump($x);
		}

		die(1);
	}
}