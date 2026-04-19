<?php

declare(strict_types=1);

namespace App\Test;

use App\BasicClass;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BasicClass::class)]
final class BasicClassTest extends TestCase
{
    public function testGreetOutputsCorrectString(): void
    {
        $basic = new BasicClass();

        $greeting = $basic->greet('MyName');

        $this->assertSame('Hello MyName', $greeting);
    }
}
