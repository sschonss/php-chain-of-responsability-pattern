<?php

namespace Sschonss\PhpChainOfResponsability;

class ConcreteHandler3 extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === 'three') {
            return "Handled by ConcreteHandler3\n";
        } else {
            return parent::handle($request);
        }
    }
}