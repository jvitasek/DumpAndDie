# Tracy dd()
Dump and die as known in Laravel for Tracy (Nette Framework debugger).

## Installation
The best way to install jvitasek/tracy-dd is using [Composer](http://getcomposer.org/):
```sh
$ composer require jvitasek/tracy-dump-and-die
```

## Usage

```php
<?php declare(strict_types = 1);

use Nette\Application\UI\Presenter;
use JVitasek\DumpAndDie\Dumper;

final class TestPresenter extends Presenter {

    public function actionDefault(): void
    {
        $price = 42;
        $filename = sha1($price + time()) . '.log';
        
        // write this
        Dumper::dd($price, $filename);
        
        // instead of this
        \Tracy\Debugger::barDump($price);
        \Tracy\Debugger::barDump($filename);
        die(1);
    }

}
```