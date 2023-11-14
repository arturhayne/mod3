<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use ModThree\Application\ContextHanlder;

class ContextHanlderTest extends TestCase
{
    /**
     * @dataProvider provideMod3
     */
    public function testModThree($input)
    {
        $handler = new ContextHanlder();
        $expectedResult = bindec($input) % 3;

        $this->assertEquals($expectedResult, $handler->execute($input));
    }

    public static function provideMod3()
    {
        return [
            '"110"' => ['110'],
            '"1101"' => ['1101'],
            '"1110"' => ['1110'],
            'empty input' => [''],
            '"0"' => ['0'],
            '"1"' => ['1'],
            'big number' => ['111010101010101010101010101011010101010101010011010100101'],
        ];
    }
}
