<?php

namespace src\model\entities;

use src\model\entities\AbstractShape;

class Circle extends AbstractShape {

    /**
     * @var float
     */
    private $radius;

    public function __construct(string $color, float $radius)
    {
        parent::__construct($color);
        
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * ($this->radius * 2);
    }
}