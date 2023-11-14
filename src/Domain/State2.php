<?php

declare(strict_types=1);

namespace ModThree\Domain;

class State2 extends State
{
    private $result = 2;

    public function handle0(): void
    {
        $this->context->transitionTo(new State1());
    }

    public function handle1(): void
    {
        $this->context->transitionTo(new State2());
    }

    public function result(): int
    {
        return $this->result;
    }
}
