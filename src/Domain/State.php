<?php

declare(strict_types=1);

namespace ModThree\Domain;

abstract class State
{
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle0(): void;

    abstract public function handle1(): void;

    abstract public function result(): int;
}
