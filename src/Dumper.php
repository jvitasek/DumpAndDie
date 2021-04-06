<?php declare(strict_types=1);

namespace JVitasek\DumpAndDie;

use Tracy\Debugger;

final class Dumper {

    public static function dd(...$args) {
        foreach ($args as $x) {
            Debugger::barDump($x);
        }
        die(1);
    }

}