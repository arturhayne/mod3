<?php

declare(strict_types=1);

namespace ModThree\Application;

use ModThree\Domain\Context;

class ContextHanlder
{
    public function execute($input): int
    {
        $context = Context::start();
        for ($i = 0; $i < strlen($input); ++$i) {
            $context->processInput($input[$i]);
        }

        return $context->result();
    }
}
