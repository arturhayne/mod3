<?php

declare(strict_types=1);

namespace ModThree\Domain;

class Context
{
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public static function start(): self
    {
        return new self(new State0());
    }

    public function transitionTo(State $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request0(): void
    {
        $this->state->handle0();
    }

    public function request1(): void
    {
        $this->state->handle1();
    }

    public function processInput($input): void
    {
        if ($input === '0') {
            $this->request0();
        } elseif ($input === '1') {
            $this->request1();
        }
    }

    public function result(): int
    {
        return $this->state->result();
    }
}
