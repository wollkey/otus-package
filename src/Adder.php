<?php

declare(strict_types=1);

namespace Wollkey\OtusPackage;

final class Adder {
    public function sumOfThree(int $x, int $y, int $z): int
    {
        return $x + $y + $z;
    }
}

function sumOfThree(int $x): callable
{
    return static fn (int $y): callable => static fn (int $z): int => $x + $y + $z;
}