<?php

namespace Sschonss\PhpChainOfResponsability;

class ConcreteHandler2 extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === 'two') {
            return "Handled by ConcreteHandler2\n";
        } else {
            return parent::handle($request);
        }
    }
}