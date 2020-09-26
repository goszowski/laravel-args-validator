<?php

namespace Goszowski\LaravelArgsValidator\Rules;

abstract class BaseRule {
    
    protected array $arguments;
    
    public function __construct(array $arguments)
    {
        $this->arguments = $arguments;
    }
    
    abstract public function passes(string $argument, $value);
    
    abstract public function message();
}
