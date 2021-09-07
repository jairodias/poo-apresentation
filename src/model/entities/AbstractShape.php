<?php

namespace src\model\entities;

use src\interfaces\Shape;

abstract class AbstractShape implements Shape
{
    /**
     * @var string
     */
    private $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
