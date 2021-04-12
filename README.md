# DumpAndDie: Laravel dd() function in Tracy
dd() is a function in Laravel used to dump one or more variables and die. This is the implementation supporting this functionality in the Tracy Panel (from Nette Framework debugger).

## Installation
The best way to install jvitasek/DumpAndDie is using [Composer](http://getcomposer.org/):
```sh
$ composer require jvitasek/dumpanddie
```

## Usage in browser

```php
<?php declare(strict_types = 1);

use Nette\Application\UI\Presenter;

final class TestPresenter extends Presenter {

    public function actionDefault(): void
    {
        $price = 42;
        $filename = sha1((string) ($price + time())) . '.log';
        
        // write this
        dd($price, $filename);
        
        // instead of this
        \Tracy\Debugger::barDump($price);
        \Tracy\Debugger::barDump($filename);
        die(1);
    }

}
```

## Usage in CLI

```php
<?php declare(strict_types = 1);

use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';
Debugger::enable(Debugger::DEVELOPMENT);
$price = 42;
$filename = sha1((string) ($price + time())) . '.log';
dd($price, $filename);
```