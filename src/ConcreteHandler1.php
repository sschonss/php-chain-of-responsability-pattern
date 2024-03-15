<?php

namespace Sschonss\PhpChainOfResponsability;

class ConcreteHandler1 extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === 'one') {
            return "Handled by ConcreteHandler1\n";
        } else {
            return parent::handle($request);
        }
    }
}