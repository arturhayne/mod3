<?php

declare(strict_types=1);

namespace ModThree\Domain;

class State1 extends State
{
    private $result = 1;

    public function handle0(): void
    {
        $this->context->transitionTo(new State2());
    }

    public function handle1(): void
    {
        $this->context->transitionTo(new State0());
    }

    public function result(): int
    {
        return $this->result;
    }
}
