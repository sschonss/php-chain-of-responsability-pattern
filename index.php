<?php

require_once __DIR__ . '/vendor/autoload.php';

use Sschonss\PhpChainOfResponsability\ConcreteHandler1;
use Sschonss\PhpChainOfResponsability\ConcreteHandler2;
use Sschonss\PhpChainOfResponsability\ConcreteHandler3;

$handler1 = new ConcreteHandler1();
$handler2 = new ConcreteHandler2();
$handler3 = new ConcreteHandler3();

$handler1->setNext($handler2)->setNext($handler3);

foreach (['one', 'two', 'three', 'four'] as $request) {
    $result = $handler1->handle($request);
    echo $result ? $result : "Request not handled.\n";
}
?>
