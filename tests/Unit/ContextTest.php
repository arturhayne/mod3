<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use ModThree\Domain\Context;

class ContextTest extends TestCase
{
    /**
     * @dataProvider stateResultProvider
     */
    public function testStateResult($result)
    {
        $state = 'ModThree\Domain\State' . $result;
        $context = new Context(new $state());
        $this->assertEquals($result, $context->result());
    }

    public static function stateResultProvider()
    {
        return [
            [0],
            [1],
            [2],
        ];
    }

       /**
     * @dataProvider stateTransitionsProvider
     */
    public function testStateTransitions($state, $input, $result)
    {
        $state = 'ModThree\Domain\State' . $state;
        $request = 'request' . $input;

        $context = new Context(new $state());
        $context->{$request}();

        $this->assertEquals($result, $context->result());
    }

    public static function stateTransitionsProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 2],
            [1, 1, 0],
            [2, 0, 1],
            [2, 1, 2],
        ];
    }
}