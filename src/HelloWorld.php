<?php

namespace App\SimplePhpFlexApp;

readonly class HelloWorld
{
    public function __construct(private string $color)
    {
    }

    public function greet(): string
    {
        return "Hello, World! The color is " . $this->color;
    }
}
