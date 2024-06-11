<?php

namespace App\SimplePhpFlexApp\HelloWorld;

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
